<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateFilm extends Model
{
    protected $fillable = [
    	"title", "image", "janrs_id", "description", "IMDB"
    ];
}
