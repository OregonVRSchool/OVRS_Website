<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Page;

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

    public function applications()
    {
        $applications = Auth::user()->applications;
        foreach ($applications as $application) {
            if (is_null($application->student)) {
                $application->delete();
            }
        }
        
        return view('layouts.applicationsStatus')->with('applications', $applications);
    }

    public function category($category, $page)
    {
        $page = Page::where('url', $page)->first();

        return view('layouts/page', ['page' => $page]);
    }  

    public function role($role)
    {
    	return view('auth.register');
    }

    public function test()
    {

        return view('welcome');
    }
}
