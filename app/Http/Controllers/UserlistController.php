<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userlist;

class UserlistController extends Controller
{
    //
    public function index(){
        $users = Userlist::all();
        return view('userlist.index', compact('users'));
    }

    public function fetchUsers() {
        return response()->json(User::all());
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        User::create($validated);
        return response()->json(['status' => 'User added successfully']);
    }

    public function show($id) {
        return response()->json(User::findOrFail($id));
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:users,email,{$id}",
            'mobile' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        $user->update($validated);
        return response()->json(['status' => 'User updated successfully']);
    }

    public function destroy($id) {
        User::destroy($id);
        return response()->json(['status' => 'User deleted successfully']);
    }
}
