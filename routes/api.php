<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/consultar-credito', 'CreditoController@consultarCredito');
Route::post('/ofertas-credito/{cpf}', 'CreditoController@ofertasCredito');
Route::post('/detalhes-oferta/{cpf}/{oferta}', 'CreditoController@detalhesOferta');
Route::post('/melhores-ofertas/{cpf}', 'CreditoController@melhoresOfertas');


