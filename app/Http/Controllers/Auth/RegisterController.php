<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //Sign Up Function and Authentication
    function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phonenumber' => 'required',
                'dob' => 'required|date',
                'password' => 'required|confirmed|min:8',
            ],
            [
                'name.required' => 'The full name field is required.',
                'email.required' => 'The email field is required.',
                'email.email' => 'The email must be a valid email address.',
                'phonenumber.required' => 'The phone number field is required.',
                'dob.required' => 'The date of birth field is required.',
                'password.required' => 'The password field is required.',
                'password.confirmed' => 'The password confirmation does not match.',
                'password.min' => 'The password must be at least 8 characters.',
            ]
        );

        // Create a new user if validation passes
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phonenumber = $validatedData['phonenumber'];
        $user->dob = $validatedData['dob'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Log the user in
        Auth::login($user);
        return redirect('home'); // Redirect to the home page
    }

    // Seller Registration and Authentication



    public function register(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate(
            [
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'company' => 'required|string|max:255',
                'personalemail' => 'required|email|max:255',
                'companymail' => 'email|nullable|string',
                'phonenumber' => 'required|string|max:15|unique:sellers,phonenumber',
                'district' => 'required|string',
                'province' => 'required|string',
                'address1' => 'required|string',
                'address2' => 'nullable|string',
                'city' => 'required|string',
                'zip' => 'required|string|max:10',
            ],
            [
                // Custom error messages
                'phonenumber.unique' => 'The phone number has already been taken.',
            ]
        );

        // Create a new seller
        $seller = new Seller;
        $seller->firstname = $validatedData['firstname'];
        $seller->lastname = $validatedData['lastname'];
        $seller->company = $validatedData['company'];
        $seller->personalemail = $validatedData['personalemail'];
        $seller->companymail = $validatedData['companymail'];
        $seller->phonenumber = $validatedData['phonenumber'];
        $seller->district = $validatedData['district'];
        $seller->province = $validatedData['province'];
        $seller->address1 = $validatedData['address1'];
        $seller->address2 = $validatedData['address2'];
        $seller->city = $validatedData['city'];
        $seller->zip = $validatedData['zip'];
        $seller->save();

        // Redirect to the home page
        return redirect()->route('home');
    }
}
