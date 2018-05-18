<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Permissions;

class PostController extends BaseController
{
	public function __construct()
    {
      parent::__construct();
    }
    
    public function apply(Request $request)
    {
    	$permission = Permissions::where('title', $request['Position'])->first();

    	$user = Auth::user();
    	$user->permissions_id = $permission->id;
    	$user->save();

    	return redirect()->route('application-'.$request['Position']);
    }
}
