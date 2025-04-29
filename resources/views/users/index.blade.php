@extends('layouts.app')
@section('content')
    <h1>User List</h1>
    <a href="{{ route('users.create') }}"><button>Add User</button></a>
    <br><br>
    <table>
        <thead>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Action</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->mobile }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}"><button>View</button></a>
                        <a href="{{ route('users.edit', $user->id) }}"><button>Edit</button></a>
                        <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this user?')" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
