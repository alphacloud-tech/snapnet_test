

    <h1 class="page-header">Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files'=>true])!!}
        
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
            {!! Form::submit('Create User', ['class'=>'btn btn-primary col-md-12']) !!}
        </div>
        
    {!! Form::close() !!}

 