<?php 

//Escreva um script PHP para calcular a soma de dois números e exibir o resultado.

 $val1 = 10;
 $val2 = 10;

 $soma = $val1 + $val2;
 echo "A soma é " .$soma;

//Crie um script PHP que verifique se uma soma é par ou ímpar.
print"<hr>";
if($soma % 2 == 0){
    echo "A soma é par.";
}
print"<hr>";
//Faça um script PHP que imprima os números de 1 a 10 usando um loop.

for($i=0; $i<=10; $i++){

    echo $i; print"<br>";
}
//Escreva um script PHP para encontrar o maior número em um array.
print"<hr>";
$numeros = array(10, 5, 8, 20, 15);
$maior = $numeros[0];
foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
}
echo "O maior número no array é: $maior";
print"<hr>";

//array + foreach

$nuns = array(10, 11, 12, 23, 24, 35);

foreach($nuns as $nuns){
    echo $nuns. " : ";
}

?>