<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSavezSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Savez Admin tim',
            'email' => 'savez@ssfon.org',
            'password' => bcrypt('savez2024!'),
        ]);
    }
}
