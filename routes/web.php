<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;



Route::get('/', function () {
    $phone = User::find(2);
    $phone = User::find(2)->phone;
    // return $phone;

    $user = Phone::find(3)->user;

    $users = User::all();
  
    // return $users;

    $comment = Post::find(2);
    $comment = Post::find(1)->comments;

    // return $comment;

    $post = Post::with('comments')->get();
    // return $post;
    // $post = Post::all();
    $post = Post::with('category')->get();
    return $post;

    return view('welcome');
});
