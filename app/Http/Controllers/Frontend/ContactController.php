<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\ContactModel; // Correct import statement
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('frontend.contact');
    }

    public function submitContactForm(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'inputName' => 'required|string|max:255',
            'inputEmail' => 'required|email',
            'inputNumber' => 'required|numeric',
            'inputMessage' => 'required|string|max:5000',
        ]);

        // Save the data to the contacts table
        try {
            ContactModel::create([
                'name' => $request->inputName,
                'email' => $request->inputEmail,
                'number' => $request->inputNumber,
                'message' => $request->inputMessage,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        

        // Store success message in session
        Session::flash('success', 'Thank you for contacting us! We will get back to you soon.');

        // Redirect back to the contact page with success message
        return back()->withSuccess('Thanks for Contacting. We\'ll Contact you ASAP!');
    }
}
