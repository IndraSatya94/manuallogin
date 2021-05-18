<?php

namespace Database\Seeders;

use App\Models\User; //memanggil model user
use Illuminate\Support\Str; //memanggil Str
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //user merupakan nama model
        User::create([
            'name' => 'Admin Aplikasi',
            'level' => 'admin',
            'email' => 'minsatya94@gmail.com',
            'password' => bcrypt('sherlock'),
            'remember_token' => Str::random(60),
        ]); 
    }
}
