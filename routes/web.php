<?php

use Illuminate\Support\Facades\Route;

/**
 * ROTA DO TIPO [GET]
 * 
 * RETORNA VIEW PRINCIPAL DO SISTEMA
 * 
 * @return view;
 */
Route::get('/', function () {
    return redirect()->route('admin.login');
})->name('site.index');

/**
 * AGRUPAMENTO DE ROTAS DO PAINEL DE ADMINISTRAÇÃO (TODAS AS ROTAS VÃO USAR O MESMO PREFIXO)
 */
Route::prefix("/admin")->group( function(){

    /**
     * ROTA DO TIPO [GET]
     * 
     * RETORNA VIEW DO PAINEL DE ADMINISTRAÇÃO
     * 
     * @return view;
     */
    Route::get('', 'PainelController@viewPainel')->name('admin.painel');

    /**
     * ROTA DO TIPO [GET]
     * 
     * RETORNA VIEW DE LOGIN ADMINISTRATIVO DO SISTEMA
     * 
     * @return view;
     */
    Route::get('/login', 'LoginController@viewLogin')->name('admin.login');


});