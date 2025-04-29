@extends('layouts.app')
@section('content')
    <h1>Edit User</h1>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf @method('PUT')
        Name: <input type="text" name="name" value="{{ $user->name }}"><br>
        Email: <input type="email" name="email" value="{{ $user->email }}"><br>
        Mobile: <input type="text" name="mobile" value="{{ $user->mobile }}"><br>
        City: <input type="text" name="city" value="{{ $user->city }}"><br>
        Address: <textarea name="address">{{ $user->address }}</textarea><br>
        <button type="submit" onclick="return confirm('Update this user?')">Update</button>
        <a href="{{ route('users.index') }}"><button type="button">Back</button></a>
    </form>
@endsection
