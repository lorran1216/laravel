<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tvshow;

class TvshowController extends Controller
{
    public function index(){
        $shows = new Tvshow();
        $result = $shows->episodes();
        return var_dump($result);
    }

    public function media(){
        return $this->belongsTo(Media::class);
    }
}
