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

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

Route::put('/settings/profile/details', 'ProfileDetailsController@update');

/*
 * Schwangerschaftswochen
 */

Route::get('/schwangerschaftswochen', 'SswController@show');
Route::get('/schwangerschaftswochen/{slug}', 'SswController@show_ssw');

//Post Routes

Route::get('/schwangerschaftswochen/info/{slug}', 'SiteController@showPost');