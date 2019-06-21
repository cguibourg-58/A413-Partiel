<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $softs = [
            'Coca-Cola',
            'Eau Plate',
            'Jus d\'Orange',
            'Jus de Pomme',
            'Jus d\'Ananas',
            'Eau Gazeuze',
            'Red Bull',
            'Orangina',
            'Pepsi',
            'Fanta',
            'Coca-cola Zero'
        ];
        foreach ($softs as $soft) {
            DB::table('softs')->insert(['name' => $soft]);
        }
    }
}
