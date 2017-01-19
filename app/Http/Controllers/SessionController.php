<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
  public function getLogin()
  {
    return view('sessions.login');
  }

  public function postLogin(Request $request)
  {
    return redirect()->route('posts.index');
  }

  public function getLogout()
  {
    return redirect()->route('home');
  }
}
