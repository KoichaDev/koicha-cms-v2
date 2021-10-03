<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index() {

        return view('pages.auth.login');
    }

    public function store(Request $request) {
        // 1. validate the input field is correct
        $this -> validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

         // 2. Need to make sure user is signed in after registration
        if(!auth()->attempt($request -> only('email', 'password'))) {
            //  back() is a shortcut for redirecting the last page user visited
            return back() -> with('status', 'Invalid login details');
        }
        
        return redirect() -> route('dashboard');
    }
}
