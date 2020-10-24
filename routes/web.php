<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('contacts', 'ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('insertdata',function()
{
	$exitcode = Artisan::call('add:user');
	if($exitcode==0)
	{
		var_dump('Data enter ');
	}
});