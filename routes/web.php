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

use Illuminate\Routing\RouteGroup;

Route::get('/', 'HomeController');

Route::view('/teste', 'teste');

Route::prefix('/tarefas')->group(function(){ // Grupo de Rotas

    Route::get('/', 'TarefasController@list')->name('tarefas.list'); // Listagem de Tarefas

    Route::get('add', 'TarefasController@add')->name('tarefas.add'); // Tela de Add
    Route::post('add', 'TarefasController@addAction'); // Ação de Add

    Route::get('edit/{id}', 'TarefasController@edit')->name('tarefas.edit'); // Tela de Add
    Route::post('edit/{id}', 'TarefasController@editAction'); // Ação de Add

    Route::get('delete/{id}', 'TarefasController@del')->name('tarefas.del'); // Ação de Deletar

    Route::get('marcar/{id}', 'TarefasController@done')->name('tarefas.done'); //  Marcar como Concluido | não Concluido

    });


Route::prefix('/config')->group(function(){ // CRIANDO M RGUPO DE ROTAS COM PREFIX

    Route::get('/', 'Admin\ConfigController@index');
    Route::post('/', 'Admin\ConfigController@index');


    Route::get('info', 'Admin\ConfigController@info');

    Route::get('permissoes', 'Admin\ConfigController@permissoes');

});

Route::fallback(function(){
    return view('404'); // REDIRECIONAMENTO DE ROTA INEXISTENTE!

});

/*Route:: get('/config/info', function() {
    echo "Configuração INFO";
})->name('info');

Route:: get('/config/permissoes', function() {
    echo "Configuração de PERMISSÕES";
})->name('permissoes');



Route::get('/user/{name}', function($name){
    echo "Mostrando Usuario de NOME" .$name;

})->where('name', '[a-z]+'); // EXPRESSÕES REGULARES

Route::get('/user/{id}', function($id){
    echo "Mostrando Usuario ID".$id;


// EXPRESSÃO REGULAR CRIADA NA PASTA app/providers/RouteServiceProvider.php
  */

