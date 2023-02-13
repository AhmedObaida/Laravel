
@extends('layouts.app')

@section('title') Edit @endsection

@section('content')

    <div class="row">
    <form action="{{route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="user_id" class="form-label">Post editor</label>
            <select class="form-control" name="user_id">
                <option selected value="{{$user->id}}">{{$user->name}}</option>

                @foreach ($users as $auser)
                    @if($user->name != $auser->name)
                        <option value="{{$auser->id}}">{{$auser->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{$post->title}}" >
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" >{{$post->description}} </textarea>
        </div>


        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
