<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public function postData(Request $data)
    {
        User::create($data->all());
        return redirect('/register')->with('success', 'Account created successfully');
    }

    public function loginMe(Request $data): RedirectResponse
    {

        $credentials = $data->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $data->session()->regenerate();
            return redirect()->route('show');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ])->onlyInput('email');
    }
}
