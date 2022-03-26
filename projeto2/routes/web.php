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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);    









//-------------------------------------------------------------
Route::get('/contatos', function () {
    return view('contatos');
});

// Route::get('/produtos/', function () {

// $buscar = request('busca');

//     return view('produtos', ['buscar' =>$buscar]);
// });

// Route::get('/produtoscat/{id?}', function ($id= null) {
//     return view('catprodutos', ['id' => $id]);
// });

