<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
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
        return view('posts.create',['users'=> User::all()]);
    }

    public function store(StorePostRequest $request)
    {
      
        $request->validate(
        [
            
                'title' => ['required' , 'min:3'],
                'description' => ['required','min:5'],
        ]);
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
    {
        //   dd($post);
        
        //$post = Post::where('id', $post);
        // dd($users);
        $post = Post::find($post);
        // dd($post);
        // $users = User::find($post);

        //here we find the user id who created the post not the id of the post itself
        $user=User::find($post->user_id);
        $users = User::all();
        // dd($user)  ;
        
        // dd($post);
        return view('posts.edit',['post'=> $post,'users'=>$users , 'user'=>$user]);
    }



    public function update(Request $request, $post)
    {
        //   dd($request);
        // dd($post);
        // $user = User::find($post);
        $post = Post::find($post);
        // dd($post);
        
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function restore()
    {
        //$post = Post::find($post);
        $post = Post::onlyTrashed();
        // dd($post);
        $post->restore();
        return redirect()->route('posts.index');
    }
}