<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo.php</title>
</head>
<body>

<?php
 $A = $_POST['A'];
 $B = $_POST['B'];
 $soma= $A + $B;
 echo "A soma dos valores é ".$soma .'<br>';
 if ($soma>10) {
 echo '<font color="red">'. "Soma maior que dez". '</font>';
 }
 else{
 echo '<font color="blue">'. "Soma menor que dez". '</font>';
 }
?>




    
</body>
</html>