<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document acao.php</title>
</head>
<body>
<?php 
$Vnome = $_POST["nome"]; // atribuindo o conteúdo da caixa de texto "nome" a variavel "$Vnome
$Vidade = $_POST["idade"];

echo "Oi " .$Vnome. ". voce tem " .$Vidade. " anos !!";

?>
</body>
</html>