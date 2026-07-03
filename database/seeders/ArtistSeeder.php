<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        Artist::create([
            'name' => 'Taylor Swift',
            'number_of_albums' => 15
        ]);

        Artist::create([
            'name' => 'Sabrina Carpenter',
            'number_of_albums' => 7
        ]);
    }
}