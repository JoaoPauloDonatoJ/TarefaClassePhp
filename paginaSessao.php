<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página que vai guardar a sessão</title>
</head>
<body>
    <h1>Página após login</h1>
</body>
</html>

<?php

session_start();

if ((!isset($_SESSION['Nome']) == true) and (!isset($_SESSION['Senha']) == true)) {
    header('location:index.php');
}

$usuario = $_SESSION ['Nome'];

echo 'Bem vindo ' . $usuario; 
?>
