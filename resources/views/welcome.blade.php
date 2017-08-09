@extends('skin')


@section('top-body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Welcome ATT - Sign Up</h1>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('loginStatus'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('loginStatus') }}</p>
                    </div>
                @endif
            </div>
            @if(Auth::guest())
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="lead">Welcome ATT Login and Signup</h1>
                    <div class="panel-body">
                        Welcome to Dashboard
                    </div>
                </div>
            @else
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="lead">Welcome ATT Sign Up - Login</h1>
                    <div class="panel-body">
                        <a href="/login"><button class="btn btn-primary">Login</button></a>
                        <a href="/register"><button class="btn btn-primary">Register</button></a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@stop