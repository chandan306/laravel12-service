<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function showRegister()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'captcha' => 'required|captcha',
        ], [
            'captcha.captcha' => 'Invalid captcha entered.',
        ]);
        return "Registration Success";
    }
}
use App\Http\Controllers\HelloController;