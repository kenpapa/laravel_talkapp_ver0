<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User {
  public $id;
}

class UserController extends Controller
{
  public function create()
  {
    return view('users.create');
  }

  public function store(Request $request)
  {
    return redirect()->route('posts.index');
  }

  public function edit($id)
  {
    $user = new User();
    $user->id = 1;

    return view('users.edit')->with('user', $user);
  }

  public function update(Request $request, $id)
  {
    return redirect()->route('posts.index');
  }
}
