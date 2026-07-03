<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            'Pop',
            'Country',
            'Country Pop',
            'Pop Rock',
            'Synth-pop',
            'Dance Pop',
            'Electropop',
            'Alternative',
            'Alternative Pop',
            'Indie Folk',
            'Folk',
            'Folk Pop',
            'Rock',
            'Soft Rock',
            'Dream Pop'
        ];

        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre
            ]);
        }
    }
}