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

    public function creator()
   	{
   		
   		return view('test');
   	}

   	public function create(Request $Request)
   	{
   		$category = new Category;

   		$category->title = $Request->title;

   		$category->save();

   		$page = new Page;

   		$page->title = $category->title;
	    $page->content = "This is the default content";
	    $page->url = $this->cleanString($Request->title)."index";
	    $page->category_title = $category->title;

	    $page->save();
	    

   		return view('test');
   	}

}
