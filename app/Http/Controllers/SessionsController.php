<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function store(Request $request)
    {
      $this->validate($request, [
        'email' => 'required | email', 
        'password' => 'required |min:5' 
      ]);
      return response(200)->json(['message' => 'Post to Database']);
    }
}
