<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
    {
        return view('home', [
            'movieCount' => \App\Models\Movie::count(),
            'genreCount' => \App\Models\Genre::count(),
        ]);
    }
}
