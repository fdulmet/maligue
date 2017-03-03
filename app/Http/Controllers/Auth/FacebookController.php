<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
		return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
<<<<<<< HEAD
    {        
		
		$user = Socialite::driver('facebook')->user();

	
		/*
		if(Auth::check())
=======
    {
        dd('bim');
        $user = Socialite::driver('facebook')->user();
        if(Auth::check())
>>>>>>> 3944fb3db548d55bcc717bed683229ba67e2bab7
        {
            return view('/home');
        }
        else
        {
<<<<<<< HEAD
            return view ('auth/login');
            //$user = Socialite::driver('facebook')->user();
        }*/
=======
            return view ('/login');
        }
>>>>>>> 3944fb3db548d55bcc717bed683229ba67e2bab7

        // $user->token;
    }

}
