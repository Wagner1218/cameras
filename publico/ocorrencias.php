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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                <th scope="col">Ação</th>
              </tr>
            </thead>
            
            <?php
              if(count($resultado) > 0){
                foreach($resultado as $indice => $dbaselec) { 	
                  echo "<tbody>  
                    <div class='text-nowrap'>
                      <tr>
                        <th scope='row'>$dbaselec->nome</th>
                        <th >$dbaselec->telefone</th>
                        <th>$dbaselec->data1</th>
                        <th>$dbaselec->local1</th>
                        <th>$dbaselec->horario</th>
                        <th style='max-width: 500px;'>$dbaselec->descricao</th>
                        <form method='POST' action='../php/controlador.php?del=$dbaselec->id'>
                          <th>
                            <button type='submit' name='acao' value='deletar' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button>
                        </form>
                          </th>
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