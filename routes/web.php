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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/actualite', 'BlogController@home')->name('blogHome');
Route::get('/actualite/article', 'BlogController@article')->name('blogArticle');
Route::get('/actualite/add', 'BlogController@add')->name('blogAdd');

Route::get('/entreprise', function (){
    return view('entreprise');
})->name('entreprise');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('/savoirFaire', function (){
    return view('savoirFaire');
})->name('savoirFaire');

Route::get('/raffinerie', function (){
    return view('activity.raffinerie');
})->name('raffinerie');

Route::get('/fonderie', function (){
    return view('activity.fonderie');
})->name('fonderie');

Route::get('/incineration', function (){
    return view('activity.incineration');
})->name('incineration');

Route::get('/cremation', function (){
    return view('activity.cremation');
})->name('cremation');

Route::get('/chaudiere', function (){
    return view('activity.chaudiere');
})->name('chaudiere');

Route::get('/cheminee', function (){
    return view('activity.cheminee');
})->name('cheminee');

Route::get('/demolition', function (){
    return view('activity.demolition');
})->name('demolition');

Route::get('/export', function (){
    return view('activity.export');
})->name('export');

Route::get('/nucleaire', function (){
    return view('activity.nucleaire');
})->name('nucleaire');

Route::get('/cimenterie', function (){
    return view('activity.cimenterie');
})->name('cimenterie');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
