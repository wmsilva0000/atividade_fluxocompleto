<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacoes</title>
</head>
<body>
  <h1>O resultado da Operação é</h1>
    <p>Tipo: {{ $tipo }}</p>
    <p>Valor 1: {{ $valor1 }}</p>
    <p>Valor 2: {{ $valor2 }}</p>
    <p>Resultado: {{ $resultado }}</p>
    @if ($valor1 && $valor2 == 0)
    <p> Não é possível fazer operações com 0 </P>
    @endif
</body>
</html>