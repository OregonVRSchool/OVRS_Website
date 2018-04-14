<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Category;

class CMSController extends Controller
{
    public function index()
    {
    	return view('cms');
    }

    public function categories()
    {
    	$categories = Category::All();

    	return view('partials.cms.category', ['categories' => $categories]);
    }

    public function pages()
    {
    	$categories = Category::all();
    	$pages = Page::all();

    	return view('partials.cms.page')->with(['categories' => $categories, 'pages' => $pages]);
    }
}
