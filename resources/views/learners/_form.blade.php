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