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

Route::get('/', function () {
    //return view('welcome');
    return "Home";
});

Route::get('login', function () {
    return 'Form login';
});

Route::group(['prefix' => 'produtos', 'middleware' => 'auth'], function(){
  Route::get('/', function () {
      return view('produtos.index');
  });

  Route::get('{idProduto}', function ($idProduto) {
      return "produto => ".$idProduto;
  });

  Route::delete('{idProduto}', function ($idProduto) {
      return "remover => ".$idProduto;
  });

  Route::put('{idProduto}', function ($idProduto) {
      return "atualizar => ".$idProduto;
  });
});
