<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 1; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('users')->insert([
                'nik' => '923919132',
    			'name' => 'admin',
                'notlp' => '0913293129',
    			'email' => 'admin@gmail.com',
                'alamat' => $faker->address,
                'gambar' => '3.png',
                'role' => 'admin',
    			'password' => bcrypt('123'),
    		]);
 
    	}
    }
}
