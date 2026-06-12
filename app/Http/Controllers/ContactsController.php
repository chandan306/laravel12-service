<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|digits_between:10,15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:1000',
        ]);

       
        Contact::create($validated);

        return redirect()->back()
            ->with('success', 'Your message has been sent successfully!');
    }
}
