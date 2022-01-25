<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => ['required']
        ]);
        if (! auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Your provided credential is wrong...'
            ]);
        }

        session()->regenerate();
        return redirect('/')->with('success', "Hello there, welcome back...");
        
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye.');
    }   
}
