<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


//string
Route::get('coba', function() {
    return "halo :D";
});

//array JSON
Route::get('coba1', function(){
    return ['halo','haihai'];
});

//array JSON
Route::get('coba2', function(){
    return [
        'Nama' => 'Salsabila Amanda Putri',
        'NIS'  => 3103120206,
        'Kelas'=> 'XII RPL 6'
    ];
});

//array JSON
Route::get('coba3', function(){
    return response()->json(
        [
        'Nama' => 'Salsabila Amanda Putri',
        'NIS'  => 3103120206,
        'Kelas'=> 'XII RPL 6'
        ], 201
    );
});
