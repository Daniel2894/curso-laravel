<?php


Route::get('/prueba', function()
{
	return View::make('prueba');
});

Route::controller('personal','PersonalController');
