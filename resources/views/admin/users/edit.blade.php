

    <h1 class="page-header">Edit Users</h1>


    <div class="col-sm-9">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id ]])!!}
            
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password',  ['class'=>'form-control']) !!}
        </div>

            
            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-4']) !!}
            </div>
            
        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id ]])!!}
           
            <div class="form-group">
                {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-4 pull-right']) !!}
            </div>
            
        {!! Form::close() !!}
    </div>
    