<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    
    protected $fillable = ['titulo', 'duration', 'release_date'];
    
    public function movie(){
        return $this->hasOne(Movie::class);
    }

    public function tvshow(){
        return $this->hasOne(Tvshow::class);
    }
    
}
