<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Método que sera executado assim q a classe for utilizada
    // _invoke executa uma function  (invoke age como contrutor/constructor)
    public function __invoke()
    {
        return "Você está na raiz do projeto";
    }

}
?>