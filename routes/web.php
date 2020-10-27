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
Route::get('/actualite/add', 'BlogController@add')->name('blogAdd')->middleware('auth');
Route::post('/actualite/add', 'BlogController@add_post')->name('blogAddPost')->middleware('auth');
Route::get('/actualite/{id}', 'BlogController@article')->name('blogArticle');
Route::get('/actualite/{id}/edit', 'BlogController@edit')->name('blogEdit')->middleware('auth');
Route::post('/actualite/{id}/edit', 'BlogController@edit_post')->name('blogEditPost')->middleware('auth');
Route::get('/actualite/{id}/delete', 'BlogController@delete')->name('blogDelete')->middleware('auth');

Route::get('/entreprise', function (){
    return view('entreprise');
})->name('entreprise');

Route::get('/mentionsLegales', function (){
    return view('mentions');
})->name('mentions');

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

Route::get('/energie', function (){
    return view('activity.combustion');
})->name('combustion');

Route::get('/damkaloc', function (){
    return view('damkaloc');
})->name('damkaloc');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
