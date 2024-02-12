<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    #return all the movies in a view
    public function index(){
        $movs = Movie::all();
        return view('filmes', ['movs' => $movs]);
    }

    #validate the data
    public function store(Request $request){
        $validate = $request->validate([
            'title' => 'required|unique:movies|max:255',
            'release_date' => 'required',
            'duration' => 'required|integer',
            'description' => 'required'
        ]);

        Movie::create($validate);

        return response()->json(['mensagem' => 'Alright', 201]);
    }
}
