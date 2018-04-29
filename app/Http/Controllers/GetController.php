<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('test');
    }

    public function role($role)
    {
    	return view('auth.register');
    }
}
