<?php
session_start();
include_once("conexao.php");
; ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <title>Lista de Usuarios</title>
  </head>
  <body>
    <div class="row">
    <div class="container" align="center">
    <a class="btn btn-link" href="cad_usuario.php"><h4>Cadastrar</h4></a><br>
    <h1>Lista de Usuarios </h1>
    <?php

    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset ($_SESSION['msg']);
    }
    // Receber o numero da pagina
    $pagina_atual   = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    //Setar quantidade itens pagina
    $qnt_result_pg = 3;

    //Calcular o inicio
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;


    $result_usuarios = "SELECT * FROM usuarios LIMIT $inicio,$qnt_result_pg";
    $resultado_usuarios = mysqli_query($conn,$result_usuarios);
    while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
      echo"ID: ". $row_usuario['id']."<Br>";
      echo"Nome: ". $row_usuario['nome']."<Br>";
      echo"Email: ". $row_usuario['email']."<Br>";
      echo"Telefone : ". $row_usuario['telefone']."<br>";
      echo"<a href='edit_usuario.php?id= ". $row_usuario['id']."'>Editar</a><Br>";
      echo"<a href='proc_apagar_usuario.php?id=" .$row_usuario['id'] ."'>Apagar</a><br><hr>";
    }

    //Paginacao
    $result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
    $resultado_pg = mysqli_query($conn,$result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);

    //quantidade de pagina

    $quantidade_pg = ceil($row_pg['num_result']/$qnt_result_pg );
    //Limitar links
    $max_links = 2;
    echo "<a href='index.php?pagina=1'>Primeira Pagina </a>";
    for ($pag_ant = $pagina - $max_links;$pag_ant <= $pagina - 1; $pag_ant ++) {
      if($pag_ant >=1 ){
      echo "<a href='index.php?pagina=$pag_ant'>$pag_ant </a>";
    }
  }
    echo "$pagina";
    for($pag_dep = $pagina + 1;$pag_dep <= $pagina + $max_links; $pag_dep++){
      if ($pag_dep <= $quantidade_pg) {


      echo "<a href='index.php?pagina=$pag_dep'> $pag_dep </a>";
      }
    }


    echo "<a href='index.php?pagina=$quantidade_pg'> Ultima Pagina </a>";
    ?>
  </div>
</div>
  </body>
</html>
