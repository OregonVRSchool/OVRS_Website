<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class FileController extends BaseController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function deleteFile(Request $request)
    {
    	$photo = Auth::user()->pictures()->find($request->id);
    	return response()->json(['response' => $photo]);
    }
}
