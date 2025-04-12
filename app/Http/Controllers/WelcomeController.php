<?php

namespace App\Http\Controllers;

use App\Models\Charity;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // This function handles the request and loads the 'welcome' view
    public function welcomeone()
    {
        $charities = Charity::select('id', 'charity_name', 'charity_image', 'charity_details')
            ->orderBy('id', 'desc')
            ->get();
        return view('welcome', compact('charities'));
    }
}
