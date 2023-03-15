<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        Session::put('user', $validated['username'] . ' ' . $validated['password']);
        return redirect()->intended('/products');
    }

    // Handle logout
    public function logout(Request $request)
    {

        Session::forget('user');
        return redirect('/');
    }
}
