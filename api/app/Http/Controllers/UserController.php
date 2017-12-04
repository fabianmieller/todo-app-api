<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function get(){
		$user = auth()->guard('api')->user();
		return response()->json($user, 200);
	}
}
