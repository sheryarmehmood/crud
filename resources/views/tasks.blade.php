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
                    <div class="card-header"><a href="{{url('/create-task')}}"><button class="btn btn-success">Add New Task</button></a></div>

                       <div class="card-body">
                        <table class="table table-bordered">

                            <thead>
                            <th>Sno</th>
                            <th>User Name</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                            </thead>

                            <tbody>
                            @foreach($tasks as $key => $task)
                            <tr>
                                <td>
                                    {{++$key}}
                                </td>

                                <td>
                                    {{!empty($task->user->name) ? $task->user->name : 'N/A'}}
                                </td>

                                <td>
                                    {{$task->name}}
                                </td>
                                <td>
                                    {{$task->description}}
                                </td>
                                <td>
                                    <a href="{{url('/update-task', $task->id)}}"> <button class="btn btn-primary">Edit</button></a>
                                    <a href="{{url('/delete-task', $task->id)}}"><button class="btn btn-danger">Delete</button>
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
