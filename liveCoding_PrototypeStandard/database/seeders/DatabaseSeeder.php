<?php

namespace Database\Seeders;
use  App\Models\Brief;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            Brief::create(
                [
                    'NomBrief' => Str::random(8),
                    'DateLivraison' => Carbon::now(),
                    'DateRecuperation' => Carbon::now()
                ]
            );

        }
        
    }
}
