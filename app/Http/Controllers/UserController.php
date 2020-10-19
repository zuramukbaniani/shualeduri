<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateFilm;

class UserController extends Controller
{
    public function show()
    {
    	$films = CreateFilm::get();
    	return view("user.index", ["films"=>$films]);
    }
}
