<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Unit;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Super Admin'
        ]);

        Permission::create([
            'role' => '1',
            'dashboard' => '1'
        ]);

        User::create([
            'name' => "Super Admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '1'
        ]);
    }
}
