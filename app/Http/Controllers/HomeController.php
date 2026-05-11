<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Home Page dikhane ke liye index method
     */
    public function index()
    {
        // Yahan aap titles ya database ka data bhi bhej sakte hain
        $pageTitle = "Rafix Digital - Digital Growth Partner";
        
        return view('home', compact('pageTitle'));
    }
}
