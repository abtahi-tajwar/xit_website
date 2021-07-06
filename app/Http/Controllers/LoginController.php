<?php

namespace App\Http\Controllers;

use App\Member;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    function init()
    {
        return view('admin.auth.login');
    }
    function verifyUser(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $admin = Member::where('email', $email)->first();
        if($admin === null) {
            $req->session()->flash('error', 'Wrong credential, please try again');
            return redirect()->route('view-admin-login');               
            
        } else {
            if($admin->type !== 'admin') {
                $req->session()->flash('error', 'Your account does not have access to admin panel');
                return redirect()->route('view-admin-login');
            } 

            if($password ===  $admin->password) {
                $req->session()->put('admin_id', $admin->id);
                return redirect()->route('admin-dashboard');    
            } else {
                $req->session()->flash('error', 'Wrong credential, please try again');
                return back();
            }
        }
        //dd($admin);
    }
    function Logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
