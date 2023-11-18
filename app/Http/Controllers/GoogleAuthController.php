<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('provider_id', $googleUser->getID())->first();

            if(!$user){
                $new_user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'provider' => 'google',
                    'provider_id' => $googleUser->getId()
                ]);
                Auth::login($new_user);
                return redirect()->intended('dashboard');
            } else{
                Auth::login($user);
                return redirect()->intended('dashboard');
            }

        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Google authentication failed.');
        }

        return $this->callbackGoogle($googleUser, 'google');
    }
}
