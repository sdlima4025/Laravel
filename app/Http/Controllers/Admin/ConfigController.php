<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

   public function index(Request $request)
   {
       $nome = 'Sérgio';
       $idade = 50;

       $lista = [
           'Farinha de Trigo',
           'Ovo ',
           'Oleo ',
           'Manteiga'
       ];


       $data = [
           'nome'=>$nome,
           'idade'=>$idade,
           'lista'=>$lista

       ];

       return view('admin.config', $data);  /* Blade: Recebendo dados no View, Retorne uma visualização da: ('pasta.controller')*/


       /* CAPTURANDO DADOS DE FORMULARIO REQUEST
        $estado = $request->input('estado', 'BA');
        $nome = $request->input('nome', 'Visitante');
        $method = $request->method();

        //$dados = $request->only(['nome', 'idade']); // DADOS QUE QUERO RECEBER

        $dados = $request->except(['idade', '_token']);
        print_r($dados);

        //echo  "MEU NOME É: ".$nome." e o Método foi:".$method;*/


   }

        public function info(){
            echo " Configurações INFO 3";

    }

        public function permissoes(){
            echo "Configurações Permissões 3";

    }
}
