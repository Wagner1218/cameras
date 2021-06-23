<?php

include '../php/conectaBD.php';
include '../php/conectaBD.php';

$email = $_POST["email"];
$senha = $_POST["senha"];
$login = isset($_POST["acao"]) && $_POST["acao"] == 'login';

if($login){
    $res = $pdo->prepare('SELECT id, nome, email, senha, cargo FROM usuarios WHERE email = :email and senha = :senha');
    $res->bindValue(":email",$email);
    $res->bindValue(":senha",$senha);
    $res->execute();

    $usuario = $res->fetch(\PDO::FETCH_ASSOC);
    
   if($usuario['id'] != '' && $usuario['nome'] != ''){
    session_start();
    
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['cargo'] = $usuario['cargo'];
    
    header('Location: ../publico/cadastro.php');
    //"Usuário Autenticado";
    print_r("Usuario autenticado");
   }else{
    header('Location: ../index.php?login=erro');
    //"Usuário não Autenticado";
   }
}else{
    header('Location: ../index.php?login=erro');
     //"Usuário não Autenticado";
}






?>