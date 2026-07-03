<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Artist;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        $taylor = Artist::where('name', 'Taylor Swift')->first();
        $sabrina = Artist::where('name', 'Sabrina Carpenter')->first();

        $taylorAlbums = [

            ['Taylor Swift', 'taylor-swift.jpg', 15, 40.4],
            ['Fearless', 'fearless.jpg', 13, 53.7],
            ['Speak Now', 'speak-now.jpg', 14, 67.2],
            ['Red', 'red.jpg', 16, 65.1],
            ['1989', '1989.jpg', 13, 48.7],
            ['Reputation', 'reputation.jpg', 15, 55],
            ['Lover', 'lover.jpg', 18, 61.8],
            ['Folklore', 'folklore.jpg', 16, 63.5],
            ['Evermore', 'evermore.jpg', 17, 60.4],
            ['Midnights', 'midnights.jpg', 13, 44],
            ['The Tortured Poets Department', 'tortured-poets.jpg', 16, 65],
            ['Fearless (Taylor\'s Version)', 'fearless-tv.jpg', 26, 106],
            ['Red (Taylor\'s Version)', 'red-tv.jpg', 30, 131],
            ['Speak Now (Taylor\'s Version)', 'speak-now-tv.jpg', 22, 104],
            ['1989 (Taylor\'s Version)', '1989-tv.jpg', 21, 81],
        ];

        foreach ($taylorAlbums as $album) {

            Album::create([
                'name' => $album[0],
                'image' => 'albums/' . $album[1],
                'number_of_tracks' => $album[2],
                'duration' => $album[3],
                'artist_id' => $taylor->id
            ]);
        }

        $sabrinaAlbums = [

            ['Eyes Wide Open', 'eyes-wide-open.jpg', 12, 40],
            ['Evolution', 'evolution.jpg', 10, 33.5],
            ['Singular: Act I', 'singular-act1.jpg', 8, 25.7],
            ['Singular: Act II', 'singular-act2.jpg', 9, 30.1],
            ['Emails I Can\'t Send', 'emails-i-cant-send.jpg', 13, 39.2],
            ['Emails I Can\'t Send Fwd:', 'emails-i-cant-send-fwd.jpg', 17, 52.4],
            ['Short n\' Sweet', 'short-n-sweet.jpg', 12, 36],

        ];

        foreach ($sabrinaAlbums as $album) {

            Album::create([
                'name' => $album[0],
                'image' => 'albums/' . $album[1],
                'number_of_tracks' => $album[2],
                'duration' => $album[3],
                'artist_id' => $sabrina->id
            ]);
        }
    }
}
