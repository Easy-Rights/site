<?php
require_once 'bd/bd.php';
require_once 'usuario.php';

if(session_status() != PHP_SESSION_ACTIVE) session_start();


if($_REQUEST['action'] == "inserirUsuario")
    {
        $nome = $_REQUEST["nome"];
        $perfil = $_REQUEST["perfil"];
        $instituicao = $_REQUEST["instituicao"];
        $email = $_REQUEST["email"];
        $documento = $_REQUEST["cpf"];
        $login = $_REQUEST["login"];
        $senha = $_REQUEST["senha"];

        Usuario::inserirUsuario($login, $senha, $nome, $instituicao, $email, $perfil, $documento);

        include("usuarios.php");
        exit;
    }

    if($_REQUEST['action'] == "editarUsuario")
    {
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $perfil = $_REQUEST["perfil"];
        $instituicao = $_REQUEST["instituicao"];
        $email = $_REQUEST["email"];
        $login = $_REQUEST["login"];
        $senha = $_REQUEST["senha"];
        $documento = $_REQUEST["cpf"];

        Usuario::editarUsuario($id, $login, $senha, $nome, $instituicao, $email, $perfil, $documento);       

        include("usuarios.php");
        exit;
    }

    if($_REQUEST['action'] == "removerUsuario")
    {
        Usuario::removerUsuario($_REQUEST["id"]);		
         include("usuarios.php");
        exit;
    }
?>