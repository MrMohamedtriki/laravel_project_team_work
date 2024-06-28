<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParametresTableSeeder extends Seeder
{
    public function run()
    {
        // Insert initial data into parametres table
        DB::table('parametres')->insert([
            'table' => 'produit',
            'prefixe' => 'PROD',
            'separateur' => '-',
            'compteur' => 1,
            'taille' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
