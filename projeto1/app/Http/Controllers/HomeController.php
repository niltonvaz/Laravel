<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index(){

   $usuario = "Maria Nunes";
   $Perfil = "Criador";
   $empresa = "NSR GAMES BRASIL";


    $dados = [

    'usuario' =>$usuario,
    'perfil' =>$Perfil,
    'empresa' =>$empresa
];


return view('home', $dados);

    }
}