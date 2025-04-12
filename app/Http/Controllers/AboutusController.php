<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class AboutusController extends Controller
{
    // This function handles the request and loads the 'welcome' view
    public function abouteusone()
    {

        $aboutuslist = Volunteer::select('id', 'name', 'image', 'details')
            ->orderBy('id', 'desc')
            ->get();
        return view('aboutus', compact('aboutuslist'));
    }
}
