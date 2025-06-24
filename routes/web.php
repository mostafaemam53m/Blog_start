<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('index',["page"=>"pages.main"]);

});
Route::get('/index', function () {
    return view('index',["page"=>"pages.main"]);
});

Route::get('/about', function () {
    return view('index',["page"=>"pages.about"]);
});
Route::get('/post', function () {
    return view('index',["page"=>"pages.post"]);
});
Route::get('/contact', function () {
    return view('index',["page"=>"pages.contact"]);
});
