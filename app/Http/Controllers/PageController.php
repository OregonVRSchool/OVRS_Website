<?php

namespace App\Http\Controllers;

use App\Page;
use App\Category;
use App\Traits\SeoURL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    use SeoURL;
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test');
    }

   	public function creator()
   	{
   		
   		return view('partials/forms/create/page')->with('dropdownlist', Category::dropdownlist());
   	}

  /**
   * Store the incoming blog post.
   *
   * @param  StoreBlogPost  $request
   * @return Response
   */
    public function create(Request $Request)
    {
      var_dump($Request->category);

      $page = new Page;

      $page->title = $Request->title;
      $page->content = $Request->content;
      $page->url = $this->cleanString($Request->title);
      $page->category_title = Category::find($Request->category);

      // $page->save();

      return view('layouts/page', $page);
    }

    public function edit($category, $title)
    {
      $dropdownlist = Category::dropdownlist();
      $page = Page::where('title', $title)
                  ->where('category_title', $category)
                  ->first();   

      $page->category_id = array_search($page->category_title, $dropdownlist);

      return view("partials/forms/create/page", ['page' => $page, 'dropdownlist' => $dropdownlist]);
    }

    public function existanceCheck(Request $Request)
    {
      $validRequest = $Request->validate([
          'title' => 'required|max:50',
          'category' => 'required',
          'content' => 'required|max:255',
      ]);

      $category = Category::find($validRequest['category'])->title;

      if (Page::where('title', $validRequest['title'])->where('category_title', $category)->exists()) {

        return redirect()->route('page-editor', ['category' => $category, 'title' => $validRequest['title']]);

      } else {

        return $this->create($Request);

      }
    }

    public function save(Request $Request, $category, $title)
    {
      $validRequest = $Request->validate([
          'title' => 'required|max:50',
          'category' => 'required',
          'content' => 'required|max:255',
      ]);

      $page = Page::where('title', $title)
                  ->where('category_title', $category)
                  ->first();

      $page->title = $validRequest['title'];
      $page->category_title = Category::find($validRequest['category']);
      $page->content = $validRequest['content'];
      $page->url = $this->cleanString($validRequest['title]');


      return view('layouts/page', $page);
    }
}
