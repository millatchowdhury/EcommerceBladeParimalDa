<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function(){
 return view('Backend.pages.home.index');
});
