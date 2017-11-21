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

/*Route::get('/', function () {
    return view('login');
});*/

Route::get('/inscription', function () {
    return view('auth/register');
});

Route::get('/inscription/societe',function(){
    return view('auth.registersociete');
});

Route::get('/', 'Auth\LoginController@showLoginForm')->name('connexion');
Route::post('/', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/inscription', 'Auth\RegisterController@showRegistrationForm');
Route::post('/inscription', 'Auth\RegisterController@register');

//Auth::routes();

Route::get('/accueil', 'HomeController@index');

Route::get('/404', function(){
    return view('404');
});

Route::get('/article/{id}/delete','HomeController@delete');

Route::get('/article/{id}/delete/confirmed', 'HomeController@confirmedDelete');

Route::get('monstock/{stock}/productwithoutprice','monstockController@getProductwithoutprice');

Route::get('/article/{id}/edit','HomeController@editarticle');

Route::get('/article/{id}','HomeController@article');

Route::get('/article/{id}/newcommande','HomeController@newcmd');

Route::get('/monstock/{stock}', 'monstockController@getMonStock')->middleware('auth');

Route::post('/monstock','ArticleAjax@ListMarque')->middleware('auth');

Route::post('/addtomonstock','ArticleAjax@addArticle')->middleware('auth');

Route::post('/getMonStock','ArticleAjax@getMonStock')->middleware('auth');

Route::get('/dashboard','HomeController@getDashboard');

Route::get('/commandes','CommandsController@index')->middleware('auth');

Route::post('/commandes/{idCommand}/annuler','CommandsController@annuler');

Route::post('/commandes/{idCommand}/reject','CommandsController@reject');

Route::get('/masociete', 'HomeController@getSociete');

Route::post('/livesearch','liveSearchController@livePreview');

Route::get('/testlivesearch','liveSearchController@testlivePreview');


Route::get('/testajax','ArticleAjax@ListMarque');

Route::get('/test','TestController@getTest');