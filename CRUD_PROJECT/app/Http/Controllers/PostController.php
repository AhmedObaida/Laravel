<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
      
        return view('posts.index',['posts' => $posts ]);
    }

    public function create()
    {
        // $post = 
        
        return view('posts.create',['users'=> User::all()]);
    }

    public function store(Request $request)
    {
      
       // dd($request);
        Post::create($request->all());
       return redirect()->route('posts.index');
    }


    public function show($post)
    {
        // dd($post);
        //$post = Post::where('id' , $post);
        $post = Post::find($post);
        // dd($post);
        return view('posts.show',['post' => $post ]);
    }



    public function edit($post)
    {}



    public function update(Request $request, $post)
    {}

    public function delete($post)
    {
    }
}