
@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Owner</th>
        <th scope="col">Category</th>
        <th scope="col">Photo</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
      </tr>
    </thead>
    <tbody>
        @if ($posts)
        @foreach ($posts as $post)

      <tr>
        <td>{{ $post->id }}</td>
        <td> {{ $post->user->name }}</td>
        <td>{{ $post->category ? $post->category->name : "No category"}}</td>
        <td><img height="30" src="{{  $post->photo ? $post->photo->file : '' }}" alt=""></td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->created_at->diffForHumans() }}</td>
        <td>{{ $post->updated_at->diffForHumans() }}</td>
      </tr>
      @endforeach

      @endif


    </tbody>
  </table>

@endsection
