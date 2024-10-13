<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Me Again',
            'email' => 'me@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
