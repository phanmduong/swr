@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control" id="search-job" placeholder="Search"
                               value="{{$search ? $search : ""}}">
                        <span class="input-group-addon">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        @foreach($jobs as $job)
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <img class="img-responsive" src="{{$job->image_url}}" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <h3>{{$job->title}}</h3>
                    <h4>${{$job->price}}</h4>
                    <p>{{$job->description}}</p>
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Apply</button>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Confirm apply</h4>
                </div>
                <div class="modal-body">
                    <h5>Are you really apply job?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="modal-btn-si" data-dismiss="modal">Accept</button>
                    <button type="button" class="btn btn-default" id="modal-btn-no" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#search-job").keyup(function (e) {
                if (e.keyCode == 13) {
                    window.open("/search-job?search=" + $("#search-job").val(), "_self")
                }
            });
        })
    </script>
@endsection
