<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SessionsController extends Controller
{



    public function create(){
        return view('auth.login');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
       $validated =  $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', Password::default()],
        ]);
        //attempt a login

        if (Auth::attempt($validated)){

           $request->session()->regenerate();

            return redirect('/ideas');
        }

        return  back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/ideas');
    }
}
