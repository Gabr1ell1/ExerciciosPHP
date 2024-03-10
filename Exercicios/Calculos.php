<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<p>Nesse programa PHP declaramos dois números, o 1° tendo seu valor como '15' e o 2° '5'. Será feito a soma. subtração, multiplicação e divisão desses números.</p>

<hr>
<?php
print"<br>";
// Declaração das variáveis
$valor1 = 15;
$valor2 = 5;

// Operações matemáticas
$soma = $valor1 + $valor2;
$subtracao = $valor1 - $valor2;
$multiplicacao = $valor1 * $valor2;
$divisao = $valor1 / $valor2;

// Exibição dos resultados
echo "Soma: " . $soma . "<br>";
echo "Subtração: " . $subtracao . "<br>";
echo "Multiplicação: " . $multiplicacao . "<br>";
echo "Divisão: " . $divisao . "<br>";
?>















</body>
</html>