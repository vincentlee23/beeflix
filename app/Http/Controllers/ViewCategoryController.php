<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ViewcategoryController extends Controller
{
    public function display($id){
        $genre = Movie::where('genre_id', $id)->get();
        
        return view('viewcategory', [
            'genre' => $genre,
            'id' => $id
        ]);
    }
}
