<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    public function showRegister()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
       
        $request->validate([
            'name' => 'required|min:3|max:50|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|unique:register,email',
            // 'mobile' => 'required|digits:10|unique:register,mobile|regex:/^[6-9][0-9]{9}$/',
             'mobile' => '7079367676',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/'
            ],
           'captcha' => 'required|captcha'
            ], [
            'captcha.required' => 'Captcha is required.',
            'captcha.captcha' => 'Invalid captcha entered.'

        ]);
    // dd($request->all());
        Register::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('success', 'Registration Successful');
    }
}
