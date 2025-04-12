<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;  // If using the default User model

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login form submission

}
