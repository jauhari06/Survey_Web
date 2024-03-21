<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = new admin;
        $admin->username = 'admin1';
        $admin->password = bcrypt('password'); // use bcrypt to hash the password
        $admin->role = 'admin'; // or 'superadmin'
        $admin->save();

        $admin = new admin;
        $admin->username = 'admin2';
        $admin->password = bcrypt('password'); // use bcrypt to hash the password
        $admin->role = 'superadmin'; // or 'superadmin'
        $admin->save();
    }
}