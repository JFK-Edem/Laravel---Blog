
@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Status</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
      </tr>
    </thead>
    <tbody>
        @if ($users)
        @foreach ($users as $user)

      <tr>
        <td>{{ $user->id }}</td>
        <td><img height="60px" src="{{ $user->photo ? $user->photo->file : 'no user photo' }}"> </td>
        <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }} </a></td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role ? $user->role->name : 'user has no role' }}</td>
        <td>{{ $user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
        <td>{{ $user->created_at->diffForHumans() }}</td>
        <td>{{ $user->updated_at->diffForHumans() }}</td>
      </tr>
      @endforeach

      @endif


    </tbody>
  </table>

@endsection
