<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página calcular quadrado</title>
</head>
<body>
<?php 

$Va= $_POST['la'];
$Vb= $_POST['lb'];
$soma = $Va + $Vb;
$result = pow($soma,2);
echo "A soma dos valores é ".$soma. '<br>';
echo "O quadrado da soma é ".$result;
?>

    
</body>
</html>