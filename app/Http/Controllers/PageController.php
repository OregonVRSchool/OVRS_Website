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
      $page = Page::where('title', $page)
                  ->where('category_title', $category)
                  ->first();

      return view('layouts/page', $page);
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
    public function pageUpdateOrCreate(Request $Request)
    {
      $validRequest = $this->validator($Request);

      $page = Page::updateOrCreate(
        ['title' => $validRequest['title'], 'category_title' => $validRequest['category']],
        ['content' => $validRequest['content'], 'url' => $validRequest['seoURL']]
      );

      return redirect()->route('page', ['category'=> $page->category_title, 'title' => $page->url]);
    }

    /**
     * Edit an existing page
     * by category and title
     */
    public function edit($category, $title)
    {
      
      $page = Page::where('title', $title)
                  ->where('category_title', $category)
                  ->first();   

      $dropdownlist = Category::dropdownlist();
      $page->category_id = array_search($page->category_title, $dropdownlist);

      return view("partials/forms/create/page", ['page' => $page, 'dropdownlist' => $dropdownlist]);
    }

    /**
     * Check for the existance of a page
     * before overwriting one.
     */
    public function existanceCheck(Request $Request)
    {

      $validRequest = $this->validator($Request);
      
      if (Page::where('title', $validRequest['title'])->where('category_title', $validRequest['category'])->exists()) {

        return redirect()->route('page-editor', ['category' => $validRequest['category'], 'title' => $validRequest['title']]);

      } else {

        return $this->pageUpdateOrCreate($Request);

      }
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

      $validRequest['category'] = Category::find($validRequest['category'])->title;
      $validRequest['seoURL'] = $this->cleanString($validRequest['title']);

      return  $validRequest;
    }

}
