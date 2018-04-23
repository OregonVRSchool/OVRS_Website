<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
    public function apply()
    {
    	return view('test');
    }

    public function role($role)
    {
    	return view('auth.register');
    }
}
