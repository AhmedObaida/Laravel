
@extends('layouts.app')

@section('title')
    index
@endsection
@section ('content') 
    <div class="text-center">
        <a type="button" href="{{route('posts.create')}}" class="mt-4 btn btn-success">Create Post</a>
    </div>
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">posted_by</th>
            <th scope="col">created_at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user?$post->user->name:'user not found'}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{route('posts.show' ,['post'=> $post->id])}}" class="btn btn-info">View</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

