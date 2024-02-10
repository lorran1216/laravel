<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movs = Movie::all();
        return view('filmes', ['movs' => $movs]);
    }

    public function createRegister(Request $request){
        $data = $request->all();

        Movie::create($data);

        return response()->json(['mensagem' => 'Alright', 201]);
    }
}
