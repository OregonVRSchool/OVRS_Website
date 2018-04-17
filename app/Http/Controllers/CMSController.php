<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Category;
use App\Traits\SiteMap;

class CMSController extends Controller
{
    use SiteMap;
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
        $map = $this->GetMap();
        
    	return view('partials.cms.page')->with(['map' => $map]);
    }
}
