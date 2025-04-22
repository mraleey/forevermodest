<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\SignupModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth

class SignupController extends Controller
{
    public function signup()
    {
        return view("frontend.signup");
    }

    public function submitMessage(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:signup,email', // Ensure email is unique in the database
            'password' => 'required|min:6|confirmed', // Use 'confirmed' to validate password match
        ]);

        // Create a new signup instance
        $signup = new SignupModel();
        $signup->username = $request->username;
        $signup->email = $request->email;
        $signup->password = $request->password;
        $signup->save();

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('home')->with('success', 'Thanks for signing up.');
        }

        // If login fails
        return back()->withErrors(['email' => 'Could not log you in. Please try again.']);
    }
}
