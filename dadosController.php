<?php

namespace App\http\Controllers;

use App\Models\Dados;

class DadosPessoais extends Controller
{
    public function mostrarDados($id){

        $dados = DadoPessoal::find($id);

        return view('dados-pessoais.show', compact('dados'));
    }
}