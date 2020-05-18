<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormulairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('formulaires')->insert([
                'email' => Str::random(10) . '@gmail.com',
                'lastname' => Str::random(10),
                'firstname' => Str::random(10),
                'message' => 'Message du formulaire',
                'ip_address' => '127.0.0.1'
            ]);
        }
    }
}
