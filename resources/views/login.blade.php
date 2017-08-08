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
            <div class="col-md-6 col-md-offset-3">
                <h1 class="lead">Login</h1>
                <div class="panel-body">
                    <form role="form" method="post" action="/login">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="email"><i class="fa fa-envelope"></i> Email Address</label>
                            <input type="text" name="email" placeholder="email address" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fa fa-lock"></i> Password</label>
                            <input type="password" name="password" placeholder="password" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info col-md-6">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop