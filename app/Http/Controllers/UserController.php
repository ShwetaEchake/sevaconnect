<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $userlist = User::select('id', 'first_name', 'email', 'mobile', 'role')
            ->orderBy('id', 'desc')
            ->get();
        return view('adminmaster.index', compact('userlist'));
    }


    public function userstore(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'password' => 'required',
            'user_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'dob' => 'required',
            'role' => 'required',
            'confirm_password' => 'required',


        ]);

        $user = User::create([

            'email' => $request->email,
            'password' => $request->password,
            'user_name' => $request->user_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'mobile' => $request->mobile,
            'dob' => $request->dob,
            'confirm_password' => $request->confirm_password,
            'role' => $request->role,


        ]);

        return response()->json([
            'success' => 'Users added successfully!',
            'data' => $user,
        ]);
    }


    public function user_edit($id)
    {
        $user = User::findOrFail($id);


        return response()->json(['user' => $user]);
    }


    public function user_update(Request $request, $id)
    {
        $request->validate([

            'email' => 'required',

            'user_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'dob' => 'required',

            'role' => 'required',


        ]);

        $user = User::findOrFail($id);
        // print_r($class);
        // die();
        $user->update([
            'email' => $request->email,

            'user_name' => $request->user_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'mobile' => $request->mobile,
            'dob' => $request->dob,

            'role' => $request->role,
        ]);

        return response()->json(['success' => 'User Updated Successfully']);
    }


    public function changePasswordusers(Request $request, User $user)
    {
        $request->validate([
            'new_password' => 'required',
            'confirmed_password' => 'required|string|same:new_password',
        ]);

        try {
            DB::beginTransaction();
            $user->update([
                'password' => Hash::make($request->new_password),  // Hashed password store karega
                'confirm_password' => $request->confirmed_password // Plain text confirm password store karega
            ]);
            DB::commit();

            return response()->json(['success' => 'Password updated successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Something went wrong. Please try again.'], 500);
        }
    }
}
