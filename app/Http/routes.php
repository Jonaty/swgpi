<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('test', function()
{
   $user = new App\User;

   $user->name = 'Alex';
   $user->email = 'alex@hotmail.com';
   $user->password = bcrypt('alex123');

   $user->save();
});

Route::get('/', ['as' => 'home', 'uses' => 'PaginasController@home']);

//Route::resource('coordinador', ['as' => 'coordinador', 'uses' => 'CoordinadorController']);

Route::resource('coordinador', 'CoordinadorController');

Route::resource('tutor', 'TutorController');

Route::resource('docente', 'DocenteController');

Route::get('login', 'Auth\AuthController@showLoginForm');

Route::post('login', 'Auth\AuthController@login');

Route::get('salir', 'Auth\AuthController@logout');

