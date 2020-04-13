<?php
require_once("../Controller/ClientController.php");


if (isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    $controller = new ClientController();
    $controller->insertClient($nome, $cpf, $idade, $sexo);
}

if (isset($_POST['deletar'])){
    $cpf = $_POST['cpf'];

    $controller = new ClientController();
    $controller->deleteClient($cpf);
}