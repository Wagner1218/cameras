<?php
require ("conectaBD.php");

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$data1 = $_POST["data1"];
$horario = $_POST["horario"];
$local1 = $_POST["local1"];
$descricao = $_POST["descricao"];
$salvar =  isset($_POST["acao"]) && $_POST["acao"] == 'salvar';


if($salvar){
    $resp = $pdo->prepare("INSERT INTO `ocorrencias`(`nome`,`telefone`, `data1`, `horario`, 
    `local1`,`descricao`) VALUES (:nome, :telefone, :data1, :horario, :local1, :descricao)");
    $resp->bindValue(":nome", $nome);
    $resp->bindValue(":telefone", $telefone);
    $resp->bindValue(":data1", $data1);
    $resp->bindValue(":horario", $horario);
    $resp->bindValue(":local1", $local1);
    $resp->bindValue(":descricao", $descricao);
    $resp->execute();
    header('Location: index.php');
}


?>