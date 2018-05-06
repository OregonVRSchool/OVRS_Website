<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;

class GetController extends BaseController
{
	public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
        return view('welcome');
    }
    
    public function apply()
    {
    	return view('partials.forms.apply');
    }

    public function category($category, $page)
    {
        $category = Category::where('title', $category)->first();

        return view('layouts/page', ['category' => $category, 'page' => $category->pages()->where('url', $page)->first()]);
    }

    public function role($role)
    {
    	return view('auth.register');
    }

    public function test()
    {
        return view('test');
    }
}
