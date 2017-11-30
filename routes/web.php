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
    return view('homepage');
});

Route::get('/polem', function () {

	$data[] = array(
		'nama' => 'tes',
		'nim' => '1234',
	);

	$data[] = array(
		'nama' => 'tes2',
		'nim' => '12345',
	);


    return view('data', compact('data'));
});


Route::get('/input', function() {
    return view('inputData');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
