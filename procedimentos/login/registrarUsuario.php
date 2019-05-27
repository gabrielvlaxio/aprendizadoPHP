<?php
    require_once "../../classes/conexao.php";
    require_once "../../classes/usuario.php";

    $obj = new usuarios();
    $password = $_POST['senha'];
    $name = $_POST['nome'];
    $user = $_POST['usuario'];
    $email = $_POST['email'];
?>