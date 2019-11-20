<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function create()
    {
    	return view('posts.create');
    }

     public function index()
    {
    	return view('posts.index');
    }

     public function edit($id)
    {
    	return view('posts.edit');
    } 

    public function store(Request $request)
    {
    	/*dd($request->all());*/

    	$post = new post;
    	$post->title =$request->title;
    	$post->description = $request->description; 
    	$post->save();

    }
}
