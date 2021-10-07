@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Add New Task</h3>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{url('submit-task')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Task Name</label>
                                <input type="text" class="form-control" name="name" required>
                            <div class="text-danger"> {{$errors-> first('name')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                               <textarea cols="5" rows="10" class="form-control" name="description" required></textarea>
                            <div class="text-danger"> {{$errors->first('description')}}</div>
                            </div>
                            <button type="submit" class="btn btn-primary text-right" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
