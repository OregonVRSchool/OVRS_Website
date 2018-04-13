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
      
      $page = Page::where('title', $title)
                  ->where('category_title', $category)
                  ->first();     

      return view("partials/forms/create/page", ['page' =>$page, 'dropdownlist' => Category::dropdownlist()]);
    }

    public function existanceCheck(Request $Request)
    {
      $category = Category::find($Request->category)->title;

      if (Page::where('title', $Request->title)->where('category_title', $category)->exists()) {

        return $this->edit($category, $title = $Request->title);

      } else {

        return $this->create($Request);

      }
    }
}
