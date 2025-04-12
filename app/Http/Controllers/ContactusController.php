<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    // This function handles the request and loads the 'welcome' view
    public function contactusone()
    {
        return view('contactus'); // This loads resources/views/welcome.blade.php
    }
}
