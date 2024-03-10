<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com PHP.</title>
    <link rel="stylesheet" href="callc.css">
</head>
<body>



<form method="post">

<input type="number" name="n1" placeholder="Digite">

<select name="op" id="op">
        <option value="soma">Adição</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
        </select>
        
<input type="number" name="n2" placeholder="Digite">
<br><br>
        <input type="submit" value="Calcular">

        
</form>        

<?php 
//verifica se o form foi submetido(envido)
if($_SERVER["REQUEST_METHOD"] == "POST"){
//RECUPERA OS DADOS DO FORM.
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];



switch ($op) {
    case 'soma':
        $result = $n1 + $n2;
        echo "O resultado da " .$op. " é " .$result;
     break;

    case 'subtracao':
        $result = $n1 - $n2;
        echo "O resultado da " .$op. " é " .$result;
     break;

    case 'multiplicacao':
        $result = $n1 * $n2;
        echo "O resultado da " .$op. " é " .$result;
     break;

    case 'divisao':
        $result = $n1 / $n2;
        echo "O resultado da " .$op. " é " .$result;
        break;
    
    }

     

}
?>

    
</body>
</html>