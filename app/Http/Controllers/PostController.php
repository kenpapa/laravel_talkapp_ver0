<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post {
  public $message;
}

class PostController extends Controller
{
  public function index()
  {
    $post1 = new Post();
    $post1->message = "Message 1";
    $post2 = new Post();
    $post2->message = "Message 2";
    $post3 = new Post();
    $post3->message = "Message 3";
    $posts = array($post1, $post2, $post3);

    return view('posts.index')->with('posts', $posts);
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    return redirect()->route('posts.index');
  }

  public function delete_all_post()
  {
    return redirect()->route('posts.index');
  }
}
