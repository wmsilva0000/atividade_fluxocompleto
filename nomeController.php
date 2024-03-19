<?php

//atividade1_a
namespace App\http\Controllers;

class NomeCompleto extends Controller
{
    public function Mostrar($nome, $sobrenome = null)
    {
        return view('mostrar', compact('nome','sobrenome'));
    }
};