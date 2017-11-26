<?php

use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
        	'name' => str_random(10);
        	'content'=> "Saya adalah seorang dokter."
        ])
    }
}
