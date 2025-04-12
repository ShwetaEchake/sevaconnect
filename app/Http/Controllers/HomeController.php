<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // This function handles the request and loads the 'welcome' view
    public function homeone()
    {
        return view('home'); // This loads resources/views/welcome.blade.php
    }
}
