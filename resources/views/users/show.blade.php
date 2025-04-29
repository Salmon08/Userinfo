@extends('layouts.app')
@section('content')
    <h1>View User</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Mobile:</strong> {{ $user->mobile }}</p>
    <p><strong>City:</strong> {{ $user->city }}</p>
    <p><strong>Address:</strong> {{ $user->address }}</p>
    <a href="{{ route('users.index') }}"><button>Back</button></a>
@endsection
