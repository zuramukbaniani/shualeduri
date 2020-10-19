<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Janris;
use App\CreateFilm;

class AdminController extends Controller
{
    public function index()
    {
        $janri = Janri::get();
        return view("admin.adminHome", ["janri"=>$janri]);
        // return $janri;
    }
    public function create()
    {
        return view("admin.index");
    }
    public function store(Request $request)
    {
        Janris::create([
            "jarn"=>$request->input("janr"),
        ]);
    }
    public function insetFilm()
    {
        return view("admin.insertFiml");
    }
    public function saveFilm(Request $request)
    {
        CreateFilm::create([
            "title"=>$request->input("title"),
            "image"=>$request->input("image"),
            "descriction"=>$request->input("descriction"),
            "IMDB"=>$request->input("IMDB"),
            "janr_id"=>$request->input("id"),
        ]);
        return redirect()->route("admin");
    }
    public function showFilm()
    {
        $film = CreateFilm::get();
        return view("admin.fimls", ["films"=>$film]);
    }
    public function delete(Request $request)
    {
        CreateFilm::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }
}
