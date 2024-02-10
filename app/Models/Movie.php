<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'duration', 'release_date'];
    use HasFactory;

    public function movies(){
        return $this->hasMany(Movie::class);
    }

    public function media(){
        return $this->belongsTo(Media::class);
    }
}
