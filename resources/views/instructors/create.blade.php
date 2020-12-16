@extends('base')

@section('content')

@include("info")

    <h1>Create New Instructor</h1>

    <div class="row">
        <div class="col-md-5">
            
            {!! Form::open(['url'=>'/instructors', 'method'=>'post']) !!}

                @include('instructors._form')
                <div class="form-group">
                    <button class="btn btn-secondary float-right">
                    &#x2714; Create
                    </button>
                </div>

            {!! Form::close() !!}

        </div>
        <div class="col-md-7">
           @include('errors');
        </div>
    
    </div>

@endsection    
