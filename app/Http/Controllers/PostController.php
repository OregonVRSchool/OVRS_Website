<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Permissions;
use App\RequestPermissions;
use App\Student\Application;

class PostController extends BaseController
{
	public function __construct()
    {
      parent::__construct();
    }
    
    public function apply(Request $request)
    {
    	$user = Auth::user();

        $permissionRequest = new RequestPermissions;
        $permissionRequest->user_id = Auth::user()->id;
        $permissionRequest->new_permissions_id = Permissions::where('title', $request['Position'])->first()->id;
    	$permissionRequest->save();

    	return redirect()->route('application-'.$request['Position']);
    }


}
