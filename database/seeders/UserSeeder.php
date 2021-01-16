<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'kareem user',
            'email' => 'kareem@user.com',
            'password' => Hash::make('12345678'),
            'phone' => '01012366166',
            'address' => 'sheraton, cairo, egypt'
        ]);
    }
}
