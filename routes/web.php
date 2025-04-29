<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('',[UserListController::class, 'index']);
Route::resource('users', UserListController::class);
