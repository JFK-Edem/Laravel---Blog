@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\AdminPostsController@store', 'files' => true]) !!}
    @csrf
    <div class="mb-3">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', array(0 => 'Choose category', 1 => 'PHP', 2 => 'Javascript', 3 => 'Laravel', 4 => 'Boostrap'), 0, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-3">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
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
