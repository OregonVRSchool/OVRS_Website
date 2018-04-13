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
      $categories = Category::all();
      $dropdownlist = [];


      foreach ($categories as $category) {
        $dropdownlist[] = $category->title;
      }

      var_dump($dropdownlist);
   		
   		return view('partials/forms/create/page')->with('dropdownlist', $dropdownlist);
   	}

    public function create(Request $Request)
    {

      $page = new Page;

      $page->title = $Request->title;
      $page->content = $Request->content;
      $page->url = $this->cleanString($Request->title);

      $page->save();

      return view('layouts/page', $page);
    }

    public function edit($category, $title)
    {
      $page = Page::where('title', $title)
                  ->where('category_title', $category)
                  ->first();

      return view("partials/forms/create/page", $page);
    }

    public function existanceCheck(Request $Request)
    {
      if (Page::where('title', $Request->title)->where('category_title', $Request->category)->exists()) {

        return edit($Request->category, $Request->title);

      } else {

        return create($Request);

      }
    }
}
