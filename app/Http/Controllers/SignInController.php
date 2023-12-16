<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SignInController extends Controller
{
    public function postsignin(Request $request)
    {
        dd($request->all());


    }
}
