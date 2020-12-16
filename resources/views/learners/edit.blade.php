@extends('base')


@section('content')

@include("info")

<div class="modal fade" id="deleteLearnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteLearnerModalLabel">Delete Learner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['url'=>'/learners', 'method'=>'delete'])  !!}
      <div class="modal-body">
            Are you sure you want to delete this learner?
            {{Form::hidden('learner_id',$learner->id)}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete Learner</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

<h1>Edit Learner</h1>

<div class="row">
    <div class="col-md-6">

        {!! Form::model($learner, ['url'=>'/learners/'. $learner->id,'method'=>'patch']) !!}

        <div class="form-group">
            {{Form::label('user_id' , 'User')}}
            {{Form::select('user_id', \App\User::list(),null,['class'=>'form-control','placeholder'=>'Select a user'])}}
        </div>

        <div class="form-group">
            {{Form::label('level')}}
            {{Form::select('level' ,[
                'novice'=> 'Novice',
                'intermediate'=>'Intermediate',
                'advanced'=>'advanced'
            ], null,['class'=>'form-control', 'placeholder'=>'Select level'])}}
        </div>
            
        <div class="form-group">
            {{Form::label('status')}}
            {{Form::select('status' ,[
                'active'=> 'Active',
                'inactive'=>'In-active',
                'suspended'=>'Suspended'
            ], null,['class'=>'form-control', 'placeholder'=>'Select status'])}}
        </div>

        <div class="form-group">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteLearnerModal">
                       Delete
                </button>
                    <button class="btn btn-secondary float-right" type="submit">
                    &#x2714;Update
                    </button>
        </div>
        
        {!! Form::close() !!}
    </div>

</div>
@endsection 