<?php

use Illuminate\Support\Collection;
use App\Employee;
use Carbon\Carbon;


Route::get('/', [
		'uses' => 'HomeController@index',
		'as'   => 'home',
	]);



Route::get('/employee/{employee}', [
		'uses' => 'HomeController@single',
		'as'   => 'single',
	]);



