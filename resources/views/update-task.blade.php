@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Update Task</h3>
                        <form method="post" action="{{url('/update-task-form')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$task->id}}" />
                            <div class="form-group">
                                <label for="email">Task Name</label>
                                <input type="text" class="form-control" name="name" value="{{$task->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Description</label>
                               <textarea cols="5" rows="5" class="form-control" name="description">{{$task->description}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary text-right" >Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
