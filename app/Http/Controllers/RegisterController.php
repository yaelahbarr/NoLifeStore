<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'provider' => 'required|max:10'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
