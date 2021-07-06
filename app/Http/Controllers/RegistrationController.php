<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class RegistrationController extends Controller
{
    //
    function init()
    {
        return view('admin.auth.registration');
    }
    function registerAdmin(Request $req)
    {
        $admin = new Admin();
        $req->validate([
            'email' => "required|email",
            "username" => "required|max:20",
            "password" => ['required','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/','confirmed'],
            "phone" => ['required','regex:/^(?:\+88|01)?(?:\d{11}|\d{13})$/']
        ]);
        $admin->username = $req->input('username');
        $admin->password = bcrypt($req->input('password'));
        $admin->email = $req->input('email');
        $admin->save();
        
        return redirect()->route('view-admin-dashboard');
    }    
}
