<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/portfolio', function () {
    return view('portfolio');
}); 
Route::get('/hello',[RegistrationController::class,'index']);