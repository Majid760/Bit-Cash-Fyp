<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $userData = [];

    public function run()
    {
        //

        for ($i=0; $i < 60; $i++) {
            $userData[] = [
                'username' => Str::random(10),
                'firstname' => Str::random(10),
                'lastname' => Str::random(10),
                'address' => Str::random(25),
                'city' => Str::random(12),
                'country' => Str::random(15),
                'about' => Str::random(50),
                'email' => Str::random(10).'@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
            ];
        }

        foreach ($userData as $user) {
            User::insert($user);
        }
    }
}
