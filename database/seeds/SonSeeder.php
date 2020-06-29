<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i <5 ; $i++) { 
       
    	DB::table('sons')->insert([
    		'discount' => $faker->numberBetween(20,50),
    		'img' => "public/PhuQuoc.jfif",
    		'name' => Str::random(20),
    		'description' => Str::random(20),
    		'oldPrice'=>$faker->numberBetween(400,600),
    		'newPrice' =>$faker->numberBetween(100,400)
    		]);}
       }
    }

