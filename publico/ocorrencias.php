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
          <button class="btn btn-danger" type="submit">Sair</button>
        </div>
      </div>
    </nav>
      <div class="cadastro"><br><br>
        <h4 style="text-align: center;">Lista de Ocorrências</h4>
        <hr>
        <div class="" style="margin: 30px;"><br>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data</th>
                <th scope="col">Local</th>
                <th scope="col">Horário</th>
                <th scope="col">Descrição</th>
              </tr>
            </thead>
            
            <?php
              if(count($resultado) > 0){
                foreach($resultado as $indice => $dbaselec) { 	
                  echo "<tbody>  
                    <div class='text-nowrap'>
                      <tr>
                        <th scope='row' id='fname_qtde_$dbaselec->id'>$dbaselec->nome</th>
                        <th >$dbaselec->telefone</th>
                        <th>$dbaselec->data1</th>
                        <th>$dbaselec->local1</th>
                        <th>$dbaselec->horario</th>
                        <th style='max-width: 500px;'>$dbaselec->descricao</th>
                      </tr>
                    </div>
                  </tbody>";
                  
                }
              }
            ?>
          </table>
        </div>
        </div><br><hr>
      </div>
    </div>
    <div class="logo_rodape">
       <img src="../img/icone-camera.png" style="width: 40px; height: 40px,;" alt=""> 
      <h4>Wagner Martins</h4>
    </div><br><br>
</body>
</html>