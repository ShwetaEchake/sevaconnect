<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DefaultUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'adminsevaconnect@gmail.com',
            'password' => Hash::make('password'),
            'user_name' => 'admin_user',
            'first_name' => 'Admin',
            'middle_name' => 'Seva',
            'last_name' => 'Connect',
            'mobile' => '9876543210',
            'dob' => '1990-01-01',
            'confirm_password' => Hash::make('password'),
            'role' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
