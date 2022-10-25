<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage(){

        $variavel = "Homepage do sistema Laravel";

        return view('welcome', [
            'title'=>$variavel
        ]);
    }
    
    public function cadastrar(){
        echo "Pagina Cadastro";
    }


    // metodo responsavel por mostrar a pagina de login
    // user.login => quer dizer que esta na pasta user e ficheiro login
    public function fazerlogin(){
        return view('user.login');
    }
}
