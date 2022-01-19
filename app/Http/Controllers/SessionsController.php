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
        if (auth()->attempt($attributes)){
            return redirect('/')->with('success', "Hello there, welcome back...");
        }
        throw ValidationException::withMessages([
            'email' => 'Your provided credential is wrong...'
        ]);
        // return back()
        //     ->withInput()
        //     ->withErrors(['email' => 'Your provided credential is wrong...']);
        
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye.');
    }   
}
