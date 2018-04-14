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
    public function pageUpdateOrCreate(Request $Request)
    {
      
      // var_dump($Request->category);
      $validRequest = $this->validator($Request);
      $page = Page::updateOrCreate(
        ['title' => $validRequest['title'], 'category' => $validRequest['category']],
        ['content' => $validRequest['content'], 'url' => $validRequest['seoURL']]
      );

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

      $validRequest = $this->validator($Request);
      
      if (Page::where('title', $validRequest['title'])->where('category_title', $validRequest['category'])->exists()) {

        return redirect()->route('page-editor', ['category' => $validRequest['category'], 'title' => $validRequest['title']]);

      } else {

        return $this->pageUpdateOrCreate($Request);

      }
    }

    public function validator(Request $Request)
    {
      $validRequest = $Request->validate([
          'title' => 'required|max:50',
          'category' => 'required',
          'content' => 'required|max:255',
      ]);

      $validRequest['category'] = Category::find($validRequest['category']);
      $validRequest['seoURL'] = $this->cleanString($validRequest['title']);

      return  $validRequest;
    }

}
