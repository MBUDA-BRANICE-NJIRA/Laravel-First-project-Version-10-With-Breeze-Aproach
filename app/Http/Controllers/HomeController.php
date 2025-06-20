<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home'); // This matches your resources/views/Home.blade.php
    }
}
