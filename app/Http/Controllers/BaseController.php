<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Traits\SiteMap;

class BaseController extends Controller
{
	use SiteMap;
    public function __construct()
    {
    	$map = $this->GetMap();
    	View::share('map', $map);
    }
}
