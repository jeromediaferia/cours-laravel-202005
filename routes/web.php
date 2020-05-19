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

//Route::get('/contact', function(){
//   return 'Une page contact sans rien !';
//});

Route::get('/eleves/{nom}-{prenom}', function ($nom, $prenom){
    return '<h1>La page de ' . $prenom . ' ' . $nom . '</h1>';
});

Route::get('/test', 'TestController@index');

Route::get('/user/{prenom}', function($prenom){
    return view('layouts/master')->with('prenom', $prenom);
});

Route::get('/message', 'TestController@message');

//Route::get('/contact', function(){
//    return view('contact.index');
//});

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/formulaire', 'FormulaireController@index');
Route::post('/formulaire', 'FormulaireController@store');

Route::get('/form-list', 'FormListController@index');
Route::get('/singleEntry', 'FormulaireController@singleEntry');
