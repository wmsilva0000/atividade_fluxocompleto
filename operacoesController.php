<?php

namespace App\http\Controllers;


class OperacoesController extends Controller{

    public static function soma($valor1, $valor2)
    {
        return $valor1 + $valor2;
    }

    public static function subtracao($valor1, $valor2)
    {
        return $valor1 - $valor2;
    }

    public static function multiplicacao($valor1, $valor2)
    {
        return $valor1 * $valor2;
    }

    public static function divisao($valor1, $valor2)
    {
        return $valor1 / $valor2;
    }

    public function Calculo($tipo, $valor1, $valor2)
    {
        $operacao = $tipo;
        $resultado = self::$operacao($valor1, $valor2);

        return view('resultado', compact('tipo', 'valor1', 'valor2', 'resultado'));
    }
};

