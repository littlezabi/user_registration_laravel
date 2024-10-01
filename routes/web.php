<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/', function () {
    return view('home');
});

Route::get('/user/create', function () {
    return view('user.create');
});

Route::get('/user/login', function () {
    return view('user.login');
});


Route::get('/user/logout', function () {
    Auth::logout();
    return redirect('/user/login');
});



Route::post('/user/login', function () {
    $attr = request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);
    if (!Auth::attempt($attr)) {
        throw ValidationException::withMessages([
            'email' => 'Sorry, those credentials do not match'
        ]);
    }
    request()->session()->regenerate();
    return redirect('/');
});

Route::post('/user/register', function () {
    $attr = request()->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed']
    ]);
    User::create($attr);
    return redirect('/user/login');
});
