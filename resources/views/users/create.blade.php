@extends('layouts.app')
@section('content')
    <h1>Add User</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Mobile: <input type="text" name="mobile"><br>
        City: <input type="text" name="city"><br>
        Address: <textarea name="address"></textarea><br>
        <button type="submit" onclick="return confirm('Submit this user?')">Submit</button>
        <a href="{{ route('users.index') }}"><button type="button">Back</button></a>
    </form>
@endsection
