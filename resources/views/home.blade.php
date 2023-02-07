@extends('masterpage.header')

@section('content')
<div>
<table class="table">
    <tr>
    <button type="button">Add</button>
    </tr>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>

@foreach ($users as $user)
    <tr>
      <td scope="col">{{ $user->name }}</td>
      <td scope="col">{{ $user->email }}</td>
      <td scope="col">{{ $user->address }}</td>
      <td scope="col"><button type="button">Edit</button><button type="button">Delete</button></td>
    </tr>
@endforeach
</table>
</div>