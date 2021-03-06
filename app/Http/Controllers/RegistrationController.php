<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required|confirmed'
        ]);

        $user = User::create([
            'name'      => request('name'),
            'email'     => request('email'),
            'password'  => Hash::make(request('password'))
        ]);

        Auth::login($user);

        return redirect()->home();
    }
}
