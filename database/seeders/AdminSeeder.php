<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
             User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('root'),
                'role'=> User::ADMIN_ROLE
            ]);
    }
}
