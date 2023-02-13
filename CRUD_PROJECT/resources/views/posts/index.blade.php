
@extends('layouts.app')

@section('title')
    index
@endsection
@section ('content') 
    <div class="text-center">
        <a type="button" href="{{route('posts.create')}}" class="mt-4 btn btn-success">Create Post</a>
        <form action="{{route('posts.restore')}}" method="get"> 
            @csrf     
            <button type="submit" class="btn btn-warning" >Restore deleted Posts</button>
        </form>
    </div>
    <table  class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">posted_by</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user?$post->user->name:'user not found'}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <a href="{{route('posts.show' ,['post'=> $post->id])}}" class="btn btn-info">View</a>
                    <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-primary">Edit</a>
                    {{-- <a href="{{route('posts.destroy',['post'=>$post->id])}}" class="btn btn-danger">Delete</a> --}}
                    
                    <form action="{{route('posts.destroy',['post'=> $post->id])}}" method="POST">
                        @csrf
                        @method('delete')
                            <button type="submit" href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" >Delete</button>
                    </form>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

