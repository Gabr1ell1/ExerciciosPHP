<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<?php 
$i = 0;
$num = $_POST['num'];
while ($i <= 10) {
    $re = $num * $i;
    echo  $num. " X " .$i. " = " .$re. '<br/>';
    $i++;
}


?>







<style>body{text-align: center;}</style>
</body>
</html>