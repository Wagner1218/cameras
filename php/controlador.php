<?php
require ("conectaBD.php");
session_start();

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$data1 = $_POST["data1"];
$horario = $_POST["horario"];
$local1 = $_POST["local1"];
$link = $_POST["link"];
$descricao = $_POST["descricao"];
$salvar =  isset($_POST["acao"]) && $_POST["acao"] == 'salvar';
$item = $_GET["item"]; // id do item que será deletado
$editar = $_GET["editar"];
$editar_item = $_GET["editar_item"];
$deletar = isset($_POST["acao"]) && $_POST["acao"] == 'deletar';
$editar = isset($_POST["acao"]) && $_POST["acao"] == 'editar';
$editar_ocorrencias = isset($_POST["acao"]) && $_POST["acao"] == 'editar_ocorrencias';

if($salvar){
    $resp = $pdo->prepare("INSERT INTO ocorrencias (`nome`, `telefone`, `data1`, `horario`, `local1`,
     `descricao`) VALUES (:nome, :telefone, :data1, :horario, :local1, :descricao)");
    $resp->bindValue(":nome", $nome);
    $resp->bindValue(":telefone", $telefone);
    $resp->bindValue(":data1", $data1);
    $resp->bindValue(":horario", $horario);
    $resp->bindValue(":local1", $local1);
    $resp->bindValue(":descricao", $descricao);
    $resp->execute();
    header('Location: ../publico/cadastro.php');
}else if($deletar){
    $resp = $pdo->prepare("DELETE FROM ocorrencias WHERE id = :id");
    $resp->bindValue(":id", $item);
    $resp->execute();
    header('Location: ../publico/ocorrencias.php');
}else if($editar){
    require "consulta.php";
    if(count($resultado) > 0){
        foreach($resultado as $indice => $dbaselec) {
           if($item == $dbaselec->id){ 
            $_SESSION['id_edit'] = $resultado[$indice];
            header('Location: ../publico/editar.php'); 
            } 
        }
    }
}else if($editar_ocorrencias){
    require ("conectaBD.php");
     $resp = $pdo->prepare("UPDATE `ocorrencias` SET `nome`= :nome,`telefone`= :telefone,`data1`= :data1,`horario`= :horario,`local1`= :local1,`descricao`= :descricao, `link`= :link WHERE id = :id");
     $resp->bindValue(":nome", $nome);
     $resp->bindValue(":telefone", $telefone);
     $resp->bindValue(":data1", $data1);
     $resp->bindValue(":horario", $horario);
     $resp->bindValue(":local1", $local1);
     $resp->bindValue(":link", $link);
     $resp->bindValue(":descricao", $descricao);
     $resp->bindValue(":id", $editar_item); 
     $resp->execute();
     header('Location: ../publico/ocorrencias.php');
}


?>