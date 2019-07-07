<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('download', 'VideoController@download');
