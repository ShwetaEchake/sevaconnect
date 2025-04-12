<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['success' => true, 'message' => 'Login successful']);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid credentials']);
        }
    }


    public function showChangePassword()
    {
        return view('admin.change-password');
    }


    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->passes()) {
            $old_password = $request->old_password;
            $password = $request->password;

            try {
                $user = DB::table('users')->where('id', $request->user()->id)->first();

                if (Hash::check($old_password, $user->password)) {
                    DB::table('users')->where('id', $request->User()->id)->update(['password' => Hash::make($password)]);

                    return response()->json(['success' => 'Password changed successfully!']);
                } else {
                    return response()->json(['error2' => 'Old password does not match']);
                }
            } catch (\Exception $e) {
                DB::rollBack();
                Log::info("password change error:" . $e);
                return response()->json(['error2' => 'Something went wrong while changing your password!']);
            }
        } else {
            return response()->json(['error' => $validator->errors()]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('/admin/login');
    }
}
