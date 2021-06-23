<?php
    $erro = isset($_GET["login"]) && $_GET["login"] == 'erro';
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <div class="container">
        <div>
          <a href="index.php"><img src="img/icone-camera.png" style="width: 40px; margin-top: -20px; height: 40px;" alt=""></a>
          <a href="index.php" class="logo navbar-brand"style="padding: 10px;">WM</a>
        </div>
        <?php
           if($erro){
            echo "<h3 style='color: red;'>Não te encontramos ):</h3>";
            }
          ?>
        <div class="form-inline">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login">Login</button>
        </div>
      </div>
      <div>
        <!-- Modal Login -->
        
          <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="login">Faça login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="login/autenticar.php">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Usuário</label>
                      <input type="text" name="email" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Senha:</label>
                      <input type="password" name="senha" class="form-control" id="recipient-name">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <button type="submit" name="acao" value="login" class="btn btn-primary">Entrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </nav>
    <div class="container">
      <img class="img" src="img/icon-personagem.png" alt="">
    </div>
   <svg class="teste" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="0.99" d="M0,256L48,240C96,224,192,192,288,197.3C384,203,480,245,576,240C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</body>
</html>