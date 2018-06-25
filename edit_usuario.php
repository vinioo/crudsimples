<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario=mysqli_query($conn,$result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
 ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Edicao de Usuario</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

  </head>

  <body class="text-center">

    <form class="form-signin" method="POST" action="proc_edit_usuario.php">
      <a class="btn btn-link" href="cad_usuario.php"><h2>Cadastrar</h2></a><br>
      <a class="btn btn-link" href="index.php"><h2>Listar</h2> </a><br>
      <h1 class="h3 mb-3 font-weight-normal">Editar</h1>
      <?php

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    ?>
      <label for="inputEmail" class="sr-only">Nome</label>
      <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
      <input type="text" name="nome" class="form-control"  required autofocus value="<?php echo $row_usuario['nome']; ?>">
      <label for="inputPassword" class="sr-only">Email</label>
      <input type="email" name="email" class="form-control"  required value="<?php echo $row_usuario['email']; ?>">
      <label for="inputTelefone" class="sr-only">Telefone</label>
      <input type="text" name="telefone" class="form-control"  required value="<?php echo $row_usuario['telefone']; ?>">

      <button class="btn btn-lg btn-primary btn-block" type="submit">Editar usuario</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
