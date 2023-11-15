<?php

use App\Livewire\CreateUser;
use App\Livewire\EditUser;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',  Users::class)->name('users');


Route::get('/users/create', CreateUser::class)->name('create-user');

Route::get('/users', Users::class)->name('users');

Route::get('/users/{user}/edit', EditUser::class)->name('edit-user');

