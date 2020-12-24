<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class homeController extends Controller
{
    public function Index()
    {
        
        return view('home.adminhome');
    }

    public function Employeelist(){
    	

        $user  = User::select('*')
                        ->where('type', 'employee')
                        ->get();
    	return view('home.employeelist')->with('emps', $user);
    }

    // public function ValidateLogin(Request $req)
    // {
    //     $user  = User::where('email', $req->email)
    //                     ->where('password', $req->password)
    //                     ->first();
        
    //     if($user)
    //     {
    //         $req->session()->put('email', $user->email);
    //         $req->session()->put('type', $user->type);
            
    // 		return redirect()->route('home.index');
    //     }
    //     else{
    //         echo "failed";
    //     }
    // }
    
}
