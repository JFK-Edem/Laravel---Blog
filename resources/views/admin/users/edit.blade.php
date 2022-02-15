@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>

    <div class="col-sm-3">

        <img height="100px" src="{{ $user->photo ? $user->photo->file : "http//placehold.it/404x400" }}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">

    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\AdminUsersController@update', $user->id], 'files' => true]) !!}
    @csrf
    <div class="mb-3">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', array(1 => 'Administrator', 2 =>'Author', 3 =>'Subscriber'), 0, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active' ), null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('photo-id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\AdminUsersController@destroy', $user->id]]) !!}
    @csrf
    <div class="mb-3">
        {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}



    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
@endsection
