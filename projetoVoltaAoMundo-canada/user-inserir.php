<?php
    require_once "classes/Usuario.php";

    $usuario = new Usuario();

    $usuario->usuario = $_POST['usuario'];
    $usuario->senha = $_POST['senha'];
    $usuario->senha = hash("sha256", $senha);

    $usuario->inserir();
?>