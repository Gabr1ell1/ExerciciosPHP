<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <style>
        
    </style>
</head>
<body>

<p>Informe o seu nome e suas notas em matemática para saber a sua média.</p>

<form method="post">
<input type="text" name="nome" placeholder="Nome">
<input type="text" name="n1" placeholder="Digite a sua 1° nota">
<input type="text" name="n2" placeholder="Digite a sua 2° nota">
<input type="text" name="n3" placeholder="Digite a sua 3° nota">
<input type="text" name="n4" placeholder="Digite a sua 4° nota">
<input type="submit" value="Calcular">
</form>

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $nome = $_POST["nome"];
  $n1 = $_POST["n1"];
  $n2 = $_POST["n2"];
  $n3 = $_POST["n3"];
  $n4 = $_POST["n4"];

 $media= (($n1+$n2+$n3+$n4)/4);
  
 echo "Aluno(a) ".$nome. ", a sua média em matemática foi: ".$media;



}
?>
    
</body>
</html>