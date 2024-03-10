<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula exemplo de uso de Variáveis</title>
</head>
<body>
    
<?php 
//declarando variéveis
$var1 = 1; // inteiro  
$varX = 9.50; // ponto flutuante
$varY = 9.50; // ponto flutuante
$var2 = $varX + $varY; //recebendo o resultado de uma expressão


$varSTR = "Atribui String"; // variável texto – string
$varletra = "a";  
$varbool = true; 

echo "Exemplo de uma aplicação em PHP.";
print "<p>";

echo "Conteúdo de var1: ";
echo $var1;
print"<p>";

echo "Conteúdo de varX: ";
echo $varX;
print"<p>";


echo "Conteúdo de varY: ";
echo $varY;
print"<p>";

echo "Conteúdo de var2 = ";
echo $var2;
print"<p>";

echo "Conteúdo de varSTR: ";
echo $varSTR;
print"<p>";


echo "conteúdo de varletra: ";
echo $varletra;
print"<p>";

echo "Conteúdo de varbool: ";
echo $varbool;
?>

</body>
</html>