<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
  public function ShowAllUsers( Request $request)
  {
     return response()->json(Author::all());
  }
}
