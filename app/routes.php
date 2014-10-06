<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/resume', 'HomeController@resume');

Route::get('/portfolio', 'HomeController@portfolio');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::get('/roll-dice/{guess}', 'HomeController@rolldice');

// Route::get('/', 'HomeController@showWelcome');


// Route::get('/roll-dice/{guess}', function($guess)
// {
// 	$random = mt_rand(1,6);
//     $data = array ('random' => $random, 'guess' => $guess);
    
//     return View::make('roll-dice')->with($data);
    
// });


