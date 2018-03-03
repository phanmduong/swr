@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        <h2>{{ Auth::user()->name }}</h2>
                        <h5>{{ Auth::user()->email }}</h5>
                        <br>
                        <br>
                        <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                           class="btn btn-primary">Logout</a>
                        <br>
                        <br>
                        <a href="/"
                           class="btn btn-success">Add job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
