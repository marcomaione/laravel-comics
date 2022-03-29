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
  
  $cards = config('comics');

  return view('home', compact('cards'));

});

route::get('/poster/{id}', function($id){

  $cards = config('comics');

  if ( is_numeric($id) && $id >= 0 && $id < count($cards)) {
    $infoPoster = $cards[$id];
    return view('info_poster', ['poster' => $infoPoster]);
  } else {
    abort(404, 'informazioni non disponibili');
  }

});
