@extends('layouts.app')
@include('includes.header')
@include('includes.styles')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->has('notify'))
                    <div class="row">
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong> Notifications </strong>{{session()->get('notify')}}
                        </div>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header"><a href="{{url('/create-post')}}" ><button class="btn btn-success">Add New Post</button></a></div>

                    <div class="card-body">
                        <table class="table table-bordered">

                            <thead>
                            <th>Sno</th>
                            <th>User Name</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Action</th>
                            </thead>

                            <tbody>
                            @foreach($posts as $key => $post)
                                <tr>
                                    <td>
                                        {{++$key}}
                                    </td>
                                    <td>
{{--                                        <a href="{{url('/posts/user', $post->user_id)}}">--}}
                                        {{$post->user->name}}
                                        </a>
                                    </td>
                                    <td>
                                        {{$post->title}}
                                    </td>
                                    <td>
                                        {{$post->body}}
                                    </td>
                                    <td>
                                        <a href="{{url('/update-post', $post->id)}}"> <button class="btn btn-primary">Edit</button></a>
                                        <a href="{{url('/delete-post', $post->id)}}"><button class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer');
@endsection
