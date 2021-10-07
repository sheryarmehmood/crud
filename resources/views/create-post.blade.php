@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Add New Post</h3>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{url('submit-post')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Title</label>
                                <input type="text" class="form-control" name="title" required>
                                @foreach ($errors->get('title') as $error)
                                    <div class="text-danger">{{$error}}</div>
                                    @endforeach
                            </div>
                            <div class="form-group">
                                <label for="pwd">Body</label>
                                <textarea cols="5" rows="10" class="form-control" name="body" required></textarea>
                                @foreach ($errors->get('body') as $error)
                                    <div class="text-danger">{{$error}}</div>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary text-right" >Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
