<?php

use App\Model\Portfolio;
use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
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
                'user_id' => 1,
                'title' => 'Titre 1',
                'content' => 'Contenu du portfolio',
                'created_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Titre 2',
                'content' => 'Contenu du portfolio numéro 2',
                'created_at' => now()->addDay()
            ]
        ];
        Portfolio::insert($data);
    }
}
