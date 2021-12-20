<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Home extends Controller
{
    //
    function index(Request $req)
    {
        Session::put('active','home');
/*
        $user=new User();
        $user->name="Mwangi";
        $user->email="l2@a.com";
        $user->password=Hash::make("12345");
        $user->save();
        */
        

        return view('home');
    }
}
