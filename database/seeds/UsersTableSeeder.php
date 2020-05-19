<?php

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Jérôme',
                'email' => 'pro.jerome.diaferia@gmail.com',
                'password' => Hash::make('000000')
            ]
        ];
        User::insert($data);
    }
}
