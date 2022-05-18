<?php

//Rutas del proyecto

Route::get('/', 'HomeController@index')->name('home');
Route::get('/crear', 'CrearController@create')->name('crear');
Route::post('crear', 'CrearController@store')->name('crear.store');

Route::get('crear/{id}', 'CrearController@edit')->name('crear.edit');
Route::patch('crear/{id}/actualiza', 'CrearController@update')->name('crear.update');

Route::delete('crear/{id}', 'CrearController@destroy')->name('crear.destroy');


Route::get('/venta', 'VentaController@index')->name('venta');

Route::patch('venta/{id}', 'VentaController@create')->name('venta.create');


/*
Route::resource('/', 'HomeController');
Route::resource('/crear', 'CrearController');
Route::resource('/venta', 'VentaController');
*/
