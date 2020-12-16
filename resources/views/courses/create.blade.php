@extends('base')

@section('content')
@include("info")
    <h1>Create New Course</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::open(['url'=>'/courses', 'method'=>'post']) !!}

            @include('courses._form')

            <div class="form-group">
                <button class="btn btn-secondary float-right">
                &#x2714; Create
                </button>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection