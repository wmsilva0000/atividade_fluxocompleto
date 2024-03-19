<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <h1>Dados Pessoais</h1>
    <p>Nome: {{ $dados->nome }}</p>
    <p>Sobrenome: {{ $dados->sobrenome }}</p>
    <p>Idade: {{ $dados->idade }}</p>
    <p>RG: {{ $dados->rg }}</p>
    <p>Gênero: {{ $dados->genero }}</p>
    <p>Endereço: {{ $dados->endereco }}</p>
</body>
</html>