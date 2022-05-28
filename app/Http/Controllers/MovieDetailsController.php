<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Episode;

class MovieDetailsController extends Controller
{
    public function display($id){
        $movie = Movie::firstWhere('id', $id);
        $episodes = Episode::where('movie_id', $id)->paginate(3);
        return view('moviedetails', [
            'movie' => $movie,
            'episodes' => $episodes
        ]);
    }
}
