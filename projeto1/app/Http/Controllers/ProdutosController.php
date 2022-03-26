<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request){

        //opção 1 utilizando GET
    //    $dados =$request->all();
    //    $produto = $dados['produto'];
    //    $preco = $dados['preco'];
    //    $categoria = $dados['categoria']; 
   
    
    //Opção 2 utilizando GET

    // $produto = $request->query('produto');
    // $preco = $request->query('preco');
    // $categoria = $request->query('categoria');

    //Opção 3 - utilizando Post

    // $produto = $request->input('produto');
    // $preco = $request->input('preco');
    // $categoria = $request->input('categoria'); 

  
   //Opção 4 - utilizando Post

    $dados = [
    'produto'=>$request->input('produto'),
    'preco'=>$request->input('preco'),
    'categoria'=>$request->input('categoria')
    ];
    return view('produtos',$dados);

    //print_r($dados);
    }
    public function excluir($id){

        echo $id;

    }

}
