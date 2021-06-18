<?php
session_start();

if($_SESSION['id'] != '' && $_SESSION['nome'] != ''){
  require ("../php/consulta.php");   
}else{
  header('Location: ../index.php?login=erro');
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <div class="container">
        <h1>
          <a href="cadastro.php"><img src="../img/icone-camera.png" style="width: 40px; height: 40px,;" alt=""></a>
          <a class="logo navbar-brand">WM</a>
        </h1>
        <h5><a href="cadastro.php">Cadatro</a></h5>
        <h5><a href="ocorrencias.php">Ocorrências</a></h5>
        <h5><a href="status.php">Status</a></h5>
        <div class="form-inline">
          <form method="POST" action="../login/sair.php">
            <button class="btn btn-danger" name="acao" value="sair" type="submit" >Sair</button>
          </form>
        </div>
      </div>
    </nav>
      <div class="cadastro">
        <hr>
      <div class="container"><br>
        <form method="POST" action="../php/controlador.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nome completo</label>
                <input type="texte" name="nome" class="form-control" id="inputEmail4" placeholder="Nome completo:" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="inputPassword4" placeholder="(47) 9xxxx-xxxx" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Data</label>
                <input type="date" name="data1" class="form-control" id="inputEmail4" placeholder="dd/mm/aaaa" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Horário</label>
                <input type="time" name="horario" class="form-control" id="inputPassword4" placeholder="Horário:" required>
              </div>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Local</label>
              <input type="text" name="local1" class="form-control" id="formGroupExampleInput" placeholder="Local:" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Link</label>
              <input type="text" name="link" class="form-control" id="formGroupExampleInput" placeholder="Local:" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descrição</label>
              <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            
            <button type="submit" name="acao" value="salvar" id="enviar" class="btn btn-danger">Salvar</button>
          </form><br>
          <hr>
        </div>
    </div>
    <div class="logo_rodape">
       <img src="../img/icone-camera.png" style="width: 40px; height: 40px,;" alt=""> 
      <h4>Wagner Martins</h4>
    </div><br><br>
</body>
</html>