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
        return "Registration Success";
    }
}
use App\Http\Controllers\HelloController;