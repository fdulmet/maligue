<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFacebookController extends Controller
{
    public function facebook()
    {
        return view('/loginfacebook');
    }
}
