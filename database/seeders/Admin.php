<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Admin::create([
            'is_staff' => 1,
            'email' => 'test@example.com',
            'first_name' => 'admin',
            'last_name' => 'ads',
            'password' => Hash::make('12345678'),

        ]);
    }
}
