<?php
  $titulo = "School Life";
 ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $titulo  ?> - Listar Professor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php"><?= $titulo  ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Início</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="cadastrar_professor.php">Professor</a>
              <a class="dropdown-item" href="#">Matéria</a>
              <a class="dropdown-item" href="#">Tipo de Atividade</a>
              <a class="dropdown-item" href="#">Atividade</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listar</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="listar_professor.php">Professor</a>
              <a class="dropdown-item" href="#">Matéria</a>
              <a class="dropdown-item" href="#">Tipo de Atividade</a>
              <a class="dropdown-item" href="#">Atividade</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <div class="jumbotron">
        <div class="container">
          <br>
          <h1 class="display-3">Cadastrar Professor</h1>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md">
            <form class="" action="database/insert_professor.php" method="post">
              <div class="form-group">
                	<label for="nome" class="texto">Nome</label>
                	<input type="text" class="form-control" name="nome" value="" placeholder="Digite o nome do Professor">
               </div>
               <div class="form-group">
                 <label for="email" class="texto">Email</label>
                 <input type="text" name="email" class="form-control" value="" placeholder="Digite o email do Professor">
               </div>
               <div class="form-group">
                 <button type="submit" class="btn btn-primary">Cadastrar</button>
               </div>
            </form>
        </div>
        <hr>
      </div>
    </main>

    <footer class="container">
      <p>School Life | Continuação do projeto de 2017.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>