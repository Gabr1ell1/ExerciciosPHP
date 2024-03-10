<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcularsomamostrar3.php</title>
</head>
<body>
    
<?php 
$A = $_POST['A'];
$B = $_POST['B'];
$soma = $A + $B;

echo "A soma dos valores é " .$soma .'<br>';
if($soma>10){
    echo "A soma é maior que dez";

}
elseif($soma<5){
    echo "A soma é menor que cinco";
}
else{
    echo"A soma está entre cinco e dez";
}



?>






</body>
</html>