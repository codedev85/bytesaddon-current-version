<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password'=> Hash::make('password')
        ]);
    }
}
