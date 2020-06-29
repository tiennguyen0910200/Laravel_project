<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
                DB::table('users')->insert([
    			'username' => "user",
    			'password' => Hash::make('password'),
    			'name' => Str::random(20),
    			'dob' => date("Y-m-d"),
    			'role'=>"user"

    		]);
                DB::table('users')->insert([
    			'username' => "admin",
    			'password' => Hash::make('password'),
    			'name' => Str::random(20),
    			'dob' => date("Y-m-d"),
    			'role'=>"admin"

    		]);
    }
    
}

