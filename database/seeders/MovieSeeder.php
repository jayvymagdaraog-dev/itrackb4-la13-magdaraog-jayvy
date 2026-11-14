<?php

namespace Database\Seeders;
use App\Models\Movie;
use App\Models\Genre;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
public function run(): void
    {
        $comedy = Genre::create([
            'name' => 'Comedy'
        ]);

        $romance = Genre::create([
            'name' => 'Romance'
        ]);

        $historical = Genre::create([
            'name' => 'Historical'
        ]);

        // Create 20 movies
        Movie::create([
            'title' => 'Rewind',
            'genre_id' => $romance->id,
            'rating' => 9,
            'year' => 2023,
        ]);

        Movie::create([
            'title' => '100 Tula Para Kay Stella',
            'genre_id' => $romance->id,
            'rating' => 7.5,
            'year' => 2017,
        ]);

        Movie::create([
            'title' => 'Ang Pangarap Kong Holdap',
            'genre_id' => $comedy->id,
            'rating' => 7.5,
            'year' => 2018,
        ]);

        Movie::create([
            'title' => 'Bonifacio: Ang Unang Pangulo',
            'genre_id' => $historical->id,
            'rating' => 7.2,
            'year' => 2014,
        ]);

        Movie::create([
            'title' => 'Mang Kepweng Returns',
            'genre_id' => $comedy->id,
            'rating' => 8,
            'year' => 2017,
        ]);

        Movie::create([
            'title' => 'The Last BeerGin',
            'genre_id' => $comedy->id,
            'rating' => 7,
            'year' => 2023,
        ]);

        Movie::create([
            'title' => 'Amnesia Love',
            'genre_id' => $romance->id,
            'rating' => 6,
            'year' => 2018,
        ]);

        Movie::create([
            'title' => 'Kita Kita',
            'genre_id' => $romance->id,
            'rating' => 8,
            'year' => 2017,
        ]);

        Movie::create([
            'title' => 'Four Sisters and a Wedding',
            'genre_id' => $comedy->id,
            'rating' => 8,
            'year' => 2013,
        ]);

        Movie::create([
            'title' => 'Goyo: Ang Batang Heneral',
            'genre_id' => $historical->id,
            'rating' => 8,
            'year' => 2018,
        ]);

        Movie::create([
            'title' => 'Hello, Love, Goodbye',
            'genre_id' => $romance->id,
            'rating' => 8,
            'year' => 2019,
        ]);

        Movie::create([
            'title' => 'Heneral Luna',
            'genre_id' => $historical->id,
            'rating' => 8,
            'year' => 2015,
        ]);

        Movie::create([
            'title' => 'Starting Over Again',
            'genre_id' => $romance->id,
            'rating' => 8,
            'year' => 2014,
        ]);

        Movie::create([
            'title' => 'The Hows of Us',
            'genre_id' => $romance->id,
            'rating' => 8,
            'year' => 2018,
        ]);

        Movie::create([
            'title' => 'Shes the One',
            'genre_id' => $romance->id,
            'rating' => 7,
            'year' => 2013,
        ]);

        Movie::create([
            'title' => 'My Perfect You',
            'genre_id' => $romance->id,
            'rating' => 7,
            'year' => 2018,
        ]);

        Movie::create([
            'title' => 'Ang Tanging Ina',
            'genre_id' => $comedy->id,
            'rating' => 7,
            'year' => 2003,
        ]);

        Movie::create([
            'title' => 'Sisterakas',
            'genre_id' => $comedy->id,
            'rating' => 7,
            'year' => 2012,
        ]);

        Movie::create([
            'title' => 'Praybeyt Benjamin',
            'genre_id' => $comedy->id,
            'rating' => 7,
            'year' => 2011,
        ]);

        Movie::create([
            'title' => 'El Presidente',
            'genre_id' => $historical->id,
            'rating' => 7,
            'year' => 2012,
        ]);
    }
}
