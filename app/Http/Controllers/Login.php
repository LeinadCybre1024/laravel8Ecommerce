<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Login extends Controller
{
    //
    function index($message=null)
    {
        Session::put('active','login');

        $data=[
            'message'=>$message,
        ];
        return view('login',$data);
    }

     public function chckLogin(Request $req)
     {
        
         $user=User::where(['email'=>$req->email])->first();
         
         if($user  || Hash::check($req->password,$user->password)  )
         {
            Session::flash('loginAlert','Welcome ');
            return "User available";
         }else
         {
            Session::flash('loginAlert','Sorry wrong deatils ');
            return "No user".$req->email;
         }
         
         
     }
}
