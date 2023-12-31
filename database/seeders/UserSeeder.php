<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@admin.com',
            'name' => 'admin',
            'password' => bcrypt('password'),
            'is_admin' => true 
        ]);
        User::create([
            'email' => 'solarteacostaw@gmail.com',
            'name' => 'Wilmar',
            'password' => bcrypt('password'),
            'is_admin' => true 
        ]);
    }
}
