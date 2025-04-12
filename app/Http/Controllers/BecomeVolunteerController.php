<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BecomeVolunteerController extends Controller
{

    public function become_volunteer()
    {
        return view('becomevolunteer');
    }
}
