<?php

namespace App\Http\Controllers;

use App\Category;
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
   		$category->url = $this->cleanString($Request->title);

   		$category->save();

   		return view('test');
   	}

}
