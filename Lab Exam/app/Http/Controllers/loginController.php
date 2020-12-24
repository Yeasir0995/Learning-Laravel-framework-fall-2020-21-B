<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{
    public function Login()
    {
        return view('login.login');
    }

    public function ValidateLogin(Request $req)
    {
        $user  = User::where('username', $req->username)
            ->where('password', $req->password)
            ->first();

        if ($user) {
            $req->session()->put('username', $user->username);
            $req->session()->put('type', $user->type);
            if($user->type == 'admin'){
                return redirect()->route('home.index');
            }else if($user->type == 'employee'){
                return redirect()->route('emp.index');
            }
            
        } else {
            return redirect()->route('login.login');
        }
    }

    
}
