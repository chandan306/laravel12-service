<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactsController;

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


Route::get('/register', [RegistrationController::class, 'showRegister']);
Route::post('/register', [RegistrationController::class, 'register'])->name('register.store');

Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');