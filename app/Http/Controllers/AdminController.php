<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin/login');
    }
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'admin'])) {
            return redirect()->intended('admin/product'); 
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function adminlogout()
    {
        Auth::logout();
        return redirect('admin/login'); 
    }
    
}
