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
    public function index($category, $page)
    {
      $page = Category::where('url', $category)->first()
                 ->pages()->where('url', $page)->first();


      return view('layouts/page', ['page' => $page]);
    }

    /**
     * The page creator template
     */
   	public function creator()
   	{
   		
   		return view('partials/forms/page')->with('dropdownlist', Category::dropdownlist());
   	}

    /**
     * Update or Create 
     * new or existing page
     */
    public function create(Request $Request)
    {

      $validRequest = $this->validator($Request);

      $page = Page::create([
        'title' => $validRequest['title'],
        'category_id' => $validRequest['category'],
        'content' => $validRequest['content'], 
        'url' => $validRequest['seoURL']
      ]);

      return redirect()->route('cms-pages');
    }

    /**
     * Edit an existing page
     * by category and title
     */
    public function edit($category, $title)
    {
      
      $page = Category::where('url', $category)->first()
                ->pages()->where('url', $title)->first();  


      $dropdownlist = Category::dropdownlist();

      return view("partials/forms/page", ['page' => $page, 'dropdownlist' => $dropdownlist]);
    }

    /**
     * Check for the existance of a page
     * before overwriting one.
     */
    public function existanceCheck(Request $Request)
    {

      $validRequest = $this->validator($Request);
      
      if (Page::where('title', $validRequest['title'])->where('category_id', $validRequest['category'])->exists()) {

        return redirect()->route('page-editor', ['category' => $validRequest['category'], 'title' => $validRequest['title']]);

      } else {

        return $this->create($Request);

      }
    }

    /**
     * Update a Page
     */
    public function update(Request $Request, $category, $title)
    {
      $validRequest = $this->validator($Request);

      $category = Category::where('url', $category)->first();
      $page = $category->pages()->where('url', $title)->first();

      $page->update(
        [
          'title' => $validRequest['title'],
          'category_id' => $validRequest['category'],
          'content' => $validRequest['content'],
          'url' => $validRequest['seoURL'],          
        ]
      );

      return redirect()->route('cms-pages');
    }

    /**
     * Update a Category index page
     */
    public function updateIndex(Request $Request, $category)
    {
      $validRequest = $Request->validate([
        'content' => 'max:255'
      ]);

      $page = Category::where('url', $category)->first()
              ->pages()->where('title', 'index')->first();

      $page->content = $validRequest['content'];

      $page->save();

      return redirect(route('cms-pages'));
    }

    /**
     * validate page form request
     */
    public function validator(Request $Request)
    {
      $validRequest = $Request->validate([
          'title' => 'required|max:50',
          'category' => 'required',
          'content' => 'required|max:255',
      ]);

      $validRequest['seoURL'] = $this->cleanString($validRequest['title']);

      return  $validRequest;
    }

}
