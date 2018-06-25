<?php
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastro</title>


    <!-- Se estiver usando bootstrap, coloque o CSS do Locastyle logo após a sua chamada -->
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">


      <form class="form-signin" method="POST" action="proc_cad_usuario.php">
      <a class="btn btn-link" href="index.php"><h1>Listar Usuarios</h1></a>
      <h1 class="h3 mb-3 font-weight-normal">Cadastrar</h1>
      <?php

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    ?>
      <label for="inputName" class="sr-only">Nome</label>
      <input type="text" id="inputName" name="name" class="form-control" placeholder="Nome" required autofocus>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
      <label for="inputTelefone" class="sr-only">Telefone</label>
      <input type="text" id="inputTelefone" name="telefone" class="form-control cel-sp-mask" placeholder="Telefone" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>

    </form>


<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  </body>
</html>
