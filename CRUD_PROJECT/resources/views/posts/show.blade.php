
@extends('layouts.app')

@section('title')
    show
@endsection

@section('content')
    we are in show {{$post['id']}}

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->posted_by}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->description}}</td>
        </tr>
        </tbody>
    </table>

@endsection

