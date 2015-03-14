<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::controller('personal','PersonalController');
Route::controller('clase2','Clase2Controller');
