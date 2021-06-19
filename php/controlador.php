<?php
require ("conectaBD.php");

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$data1 = $_POST["data1"];
$horario = $_POST["horario"];
$local1 = $_POST["local1"];
$link = $_POST["link"];
$descricao = $_POST["descricao"];
$salvar =  isset($_POST["acao"]) && $_POST["acao"] == 'salvar';
$del = $_GET["del"];
$deletar = isset($_POST["acao"]) && $_POST["acao"] == 'deletar';

if($salvar){
    $resp = $pdo->prepare("INSERT INTO ocorrencias (`nome`, `telefone`, `data1`, `horario`, `local1`, `link`,
    `descricao`) VALUES (:nome, :telefone, :data1, :horario, :local1, :link, :descricao)");
    $resp->bindValue(":nome", $nome);
    $resp->bindValue(":telefone", $telefone);
    $resp->bindValue(":data1", $data1);
    $resp->bindValue(":horario", $horario);
    $resp->bindValue(":local1", $local1);
    $resp->bindValue(":link", $link);
    $resp->bindValue(":descricao", $descricao);
    $resp->execute();
    header('Location: ../publico/cadastro.php');
}else if($deletar){
    $resp = $pdo->prepare("DELETE FROM ocorrencias WHERE id = :id");
    $resp->bindValue(":id", $del);
    $resp->execute();
    header('Location: ../publico/ocorrencias.php');
}


?>