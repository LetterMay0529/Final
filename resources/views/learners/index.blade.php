@extends('base')

@section('content')

@include("info")



<div class="float-right">
    <a href="{{ '/learners/create' }}" class="btn btn-secondary">
    &#x2719;Add New Learner
    </a>
</div>

<h1>Learners</h1>




<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
            <td class="text-center">
            <a href="{{url('/learners/' . $ln->id)}}" 
            class="btn btn-outline-dark btn-sm">&#x270E;</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
