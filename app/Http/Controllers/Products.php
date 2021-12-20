<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class Products extends Controller
{
    //
    function index()
    {
        Session::put('active','pr');
/*
        $product=new Product();
        $product->name="RADIO";
        $product->store="main";
        $product->price=500;
        $product->quantity=4;
        $product->save();
        */
        return view('products');
    }
}
