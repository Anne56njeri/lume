<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function ShowAllUsers( Request $request)
  {
     return response()->json(User::all());
  }
}
