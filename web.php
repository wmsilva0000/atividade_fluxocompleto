<?php
//atividade1_a
Route::get('/{nome}/{sobrenome?}', 'NomeCompleto@Mostrar');

//atividade1_b
Route::get('/operacoes/{tipo}/{valor1}/{valor2}', 'OperacoesController@Calculo');

//atividade1_c
Route::get('/dados/{id}', 'DadosPessoais@mostrarDados')->name('dados-pessoais.show');