<?php

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Route::get('racc', 'ControllerAccueil@getAc');
Route::get('acc', 'ControllerAccueil@getAc');
Route::get('/','ControllerAccueil@getAc');