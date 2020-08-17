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

//home

Route::get('/', ['as' => 'site.home', 'uses'=>'Site\HomeController@index']);

//login

Route::get('/login', ['as' => 'site.login', 'uses'=>'Site\LoginController@index']);

Route::get('/login/sair', ['as' => 'site.login.sair', 'uses'=>'Site\LoginController@sair']);

Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);

//vendedor



Route::group(['middleware'=>'auth'], function(){

	Route::get('tz/vendedor', ['as' => 'adm.vendedores.index','uses' => "vendedorController@index"]);
	Route::get('tz/vendedor/add', ['as' => 'adm.vendedores.add-vend', 'uses' => "vendedorController@add"]);
	Route::get('tz/vendedor/editar{id}', ['as' => 'adm.vendedores.editar-vend' , 'uses' => "vendedorController@editar"]);
	Route::get('tz/vendedor/deletar/{id}', ['as' => 'adm.vendedores.deletar-vend' , 'uses' => "vendedorController@deletar"]);
	Route::post('tz/vendedor/salvar', ['as' => 'adm.vendedores.salvar-vend', 'uses'=>'vendedorController@salvar']);
	Route::put('/adm/vendedor/atualizar{id}', ['as' => 'adm.vendedores.atualizar-vend', 'uses'=>'vendedorController@atualizar']);

	Route::get('/adm/loja', ['as' => 'adm.loja', 'uses'=>'RoupasController@index']);
	Route::get('/adm/loja/filtrar', ['as' => 'adm.loja.filtrar', 'uses'=>'RoupasController@filtrar']);
	Route::get('/adm/loja/add', ['as' => 'adm.loja.add', 'uses'=>'RoupasController@add']);
	Route::get('/adm/loja/editar{id}', ['as' => 'adm.loja.editar', 'uses'=>'RoupasController@editar']);
	Route::get('/adm/loja/deletar{id}', ['as' => 'adm.loja.deletar', 'uses'=>'RoupasController@deletar']);
	Route::put('/adm/loja/atualizar{id}', ['as' => 'adm.loja.atualizar', 'uses'=>'RoupasController@atualizar']);
	Route::get('/adm/loja/contato', ['as' => 'adm.loja.contato', 'uses'=>'RoupasController@contato']);
	Route::post('/adm/loja/salvar', ['as' => 'adm.loja.salvar', 'uses'=>'RoupasController@salvar']);

});





