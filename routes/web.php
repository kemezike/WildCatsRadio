<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/','SessionsController@main');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/apiChat','ChatController@getChat');

Route::post('/chat','ChatController@store');

Route::get('/chat', 'ChatController@getChat');

Route::delete('/chat', 'ChatController@destroy');

Route::post('/register', 'RegistrationController@store');

Route::get('/home', 'HomeController@index')->name('home');
