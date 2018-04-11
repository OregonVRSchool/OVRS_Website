<?php

namespace App\Http\Controllers;

use App\Page;
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
   		
   		return view('test');
   	}

    public function create(Request $Request)
    {

      $page = new Page;

      $page->title = $Request->title;
      $page->content = $Request->content;
      $page->url = $this->cleanString($Request->title);

      $page->save();

      return view('welcome');
    }
}
