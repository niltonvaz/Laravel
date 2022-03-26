<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;


//Forma de chamar o arquivo no controller até a versão 7
//Route::get('/','HomeController@index');

//Forma atual a partir da 8.0
Route::get('/',[HomeController::class, 'index']);
Route::post('/produtos',[ProdutosController::class, 'index']); // Mostra todos os registros

//Exclusão é feita pelo metodo GET
Route::get('/produtos/excluir/{id}',[ProdutosController::class, 'excluir']);
Route::post('/events/create',[EventController::class, 'create']); //Grava/Cria registros no banco
Route::post('/events/{$id}',[EventController::class, 'show']); //Mostra os dados do banco
Route::post('/events/', [EventController::class, 'store']);//envia dados ao banco

















//-------------------------------------

//Abrindo arquivos dentro de pastas
// Route::get('/cadastrar_usuario', function(){
//     return view('cadastros.cadastrar_usuario');
// });

//Passando parâmetros na rota
//  Route::get('/produtos/{nomeProduto}/comentario/{id}', function($nomeProduto,$id){
//     echo "Este é o comentário ".$id." dos produtos Lamarhon ".$nomeProduto;
  
//   });



