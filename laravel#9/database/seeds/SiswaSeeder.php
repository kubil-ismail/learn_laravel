<?php

use Illuminate\Database\Seeder;
// can use faker liblary
use Faker\Factory as Faker;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
            // insert data ke table pegawai menggunakan Faker
    		DB::table('siswa')->insert([
    			'nama' => $faker->name,
    			'alamat' => $faker->address
    		]);
 
    	}
    }
}
