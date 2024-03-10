<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$Vhoras = $_POST['horas'];
$Vvalor = $_POST['valor'];
$salario = $Vvalor * $Vhoras;
echo "O salário é R$" .$salario;
?>
    
</body>
</html>