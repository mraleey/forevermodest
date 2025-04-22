<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\LoginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function submitMessage(Request $request)
    {
        // Validate the login input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'rememberme' => 'sometimes|boolean',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        $remember = $request->has('rememberme');

        if (Auth::attempt($credentials, $remember)) {
            // Log the attempt (without password)
            $login = new LoginModel();
            $login->email = $request->email;
            $login->ip_address = $request->ip();
            $login->rememberme = $remember;
            $login->save();

            // Redirect to home after successful login
            return redirect()->intended('home')->with('success', 'Thanks for logging in.');
        }

        return back()->withErrors(['email' => 'Invalid credentials. Please try again.']);
    }
}
