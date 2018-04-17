<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Traits\SeoURL;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	use SeoURL;
    //

    public function index($category)
    {
      $page = Page::where('title' , 'index')
                          ->where('category_title', $category)
                          ->first();
      
      return view('layouts/page', $page);
    }

    public function creator()
   	{
   		
   		return view('partials/forms/category');
   	}

   	public function create(Request $Request)
   	{
   		$category = new Category;

   		$category->title = $Request->title;
      $category->url = $this->cleanString($Request->title);

   		

   		$page = new Page;

   		$page->title = "index";
	    $page->content = "This is the default content";
	    $page->url = "index";
	    $page->category_title = $category->title;

      $category->save();
	    $page->save();
      
	    

   		return redirect()->route('page-editor', ['category' => $category->url, 'page' => $page->url]);
   	}

    public function edit($category)
    {
      return view('test');
    }

}
