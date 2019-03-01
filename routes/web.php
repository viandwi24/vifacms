<?php
Route::get('/post/{coba}', 'PostController@view');

Route::get('/admin', function(){ return view('admin'); });
Route::get('/admin/{any}', function(){ return view('admin'); })->where('any', '.*');