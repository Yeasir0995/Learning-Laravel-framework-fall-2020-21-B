<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class registrationController extends Controller
{
    public function Registration()
    {
        return view('login.registration');
    }

    public function Store(Request $req)
    {

        $user = new User();
        $user->name         = $req->name;
        $user->username     = $req->username;
        $user->password     = $req->password;
        $user->type         = "employee";
        $user->company_name = $req->company;
        $user->contact      = $req->contact;
        


        if ($user->save()) {
            return redirect()->route('login.login');
        }else{
            return back();
        }
    }

    
}
