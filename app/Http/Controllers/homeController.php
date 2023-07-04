<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home1()
    {
        return view('home');
    }
    public function liste1()
    {
        return view('liste');
    }
}
