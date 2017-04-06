<?php

Route::get('/', 'PasswordController@showInput');
Route::post('/output','PasswordController@showOutput');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
