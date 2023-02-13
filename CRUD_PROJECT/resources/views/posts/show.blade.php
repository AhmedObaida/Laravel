
@extends('layouts.app')

@section('title') Post Info @endsection
@section('content')
    <div class="container">
        <br>
        <h1 align="center">
            we are in show {{$post['title']}}
            </h1> 
            <br>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>
                            Post Info
                        </th>
                    </tr>
                </thead>
                <tbody class="table-danger">
                    <td>
                       Title : {{$post['title']}}
                       <br>
                       Posted by : {{$post->user['name']}}
                       <br>
                       Created at : {{$post['created_at']}}
                       <br>
                       Description : {{$post['description']}}
                    </td>
               

            {{-- <x-button type ="primary">View</x-button>
            <x-button :type=”secondary”>Edit</x-button>
            <x-button :type=”danger”>Delete</x-button>
           --}}
                </tbody>
        </table>
           <br>
           <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>
                        User Info
                    </th>
                </tr>
            </thead>
              
                <tbody class="table-warning">
                    <td>
                       Name : 
                       <br>
                       
                       <br>
                       Email : 
                       
                    </td>
               

            {{-- <x-button type ="primary">View</x-button>
            <x-button :type=”secondary”>Edit</x-button>
            <x-button :type=”danger”>Delete</x-button>
           --}}
                </tbody>
           

           </table>
    </div>
@endsection