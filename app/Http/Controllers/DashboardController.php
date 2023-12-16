<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showSignIn()
    {
        return view('sign-in');
    }

    public function showSignUp()
    {
        return view('sign-up');
    }
}

// bagaimana cara membuat authentikasi unktuk login dan register


