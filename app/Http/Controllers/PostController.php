<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Permissions;

class PostController extends Controller
{
    public function apply(Request $request)
    {
    	$permission = Permissions::where('title', $request['Position']);
    	$user = Auth::user();
    	$user->permissions_id = $permission->id;
    	$user->save();

    	return Auth::user();
    }
}
