<?php

Route::get("/admin", "AdminController@index")->name("admin");
Route::get('/admin/CreatePost', "AdminController@create");
Route::post("/admin/save", "AdminController@store")->name("AdminSave");
Route::get("admin/insertfiml", "AdminController@insetFilm");
Route::post("/admin/saveFiml", "AdminController@saveFilm")->name("saveFilm");
Route::get("admin/ShowFilm", "AdminController@showFilm");
Route::post("/admin/delete", "AdminController@delete")->name("AdminDelete");
Route::get("/", "UserController@show");