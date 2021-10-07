@extends('layouts.app')

{{--@section('title', 'Home')--}}
{{--@endsection--}}
@include('includes.header')
@include('includes.styles')
@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <p>Wel  {{ Auth::user()->name }}  ! ! !</p>
                        <p>You are logged in the 'laravel crud testing system'.</p>
                        <p>In the top nav bar, links of Posts and Tasks are available.</p>
                        <p>Current Tasks and Posts can be viewed by clicking on these links.</p>
                </div>

            </div>

        </div>
    </div>
</div>
@include('includes.footer');
@endsection


