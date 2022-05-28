<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index(){
        $drama = Movie::where('genre_id', 1)->get();
        $kids = Movie::where('genre_id', 2)->get();
        $tvshow = Movie::where('genre_id', 3)->get();

        return view('home', [
            'drama' => $drama,
            'kids' => $kids,
            'tvshow' => $tvshow
        ]);
    }
}
