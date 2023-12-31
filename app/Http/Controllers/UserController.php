<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function showSignUpForm()
    {
        return view('sign-up'); // Adjust the view name as needed
    }

    public function signUp(Request $request)
    {
        // Validate request data

        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Log in the user
        Auth::login($user);
        if(Auth::user()->role_id == '2'){
            return redirect()->route('dashboard'); // Redirect to your dashboard route
        }
        else{
            return redirect()->route('homepageuser'); // Redirect to your dashboard route
        }
       
        

        return redirect()->route('dashboard'); // Redirect to your dashboard route
    }

    public function showSignInForm()
    {
        return view('sign-in'); // Adjust the view name as needed
    }

    public function signIn(Request $request)
    {
        // Validate request data
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Get the authenticated user
            $user = Auth::user();
    
            // Check the role_id
            if ($user->role_id != 2) {
                // If role_id is not 2, redirect to the homepage for users
                return redirect()->route('homepageuser');
            }
    
            // If role_id is 2, redirect to the dashboard
            return redirect()->route('dashboard');
        }
    
        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home'); // Redirect to your home route
    }

    public function showUser()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
}