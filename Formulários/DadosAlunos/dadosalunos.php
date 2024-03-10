<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginas Dadsos Alunos</title>
</head>
<body>
<?php 
echo "Segue abaixo as informações digitadas na página anterior: ". '<br>';
echo "Nome Digitado... : " .$_POST['nome']. '<br>';
echo "Telefone... : " .$_POST['telefone']. '<br>'; 
echo "RG...: " .$_POST['rg']. '<br>';
echo "Curso...: " .$_POST['curso']. '<br>';
echo "Módulo...: " .$_POST['mod']. '<br>';

?>


    
</body>
</html>