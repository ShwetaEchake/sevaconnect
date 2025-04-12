<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloglistController extends Controller
{
    // This function handles the request and loads the 'welcome' view
    public function bloglistone()
    {
        return view('bloglist'); // This loads resources/views/welcome.blade.php
    }
}
