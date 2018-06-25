<?php
session_start();
include_once("conexao.php");
$id= filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
  $result_usuario = "DELETE FROM usuarios WHERE id='$id'";
  $result_usuario=mysqli_query($conn,$result_usuario);
  if(mysql_affected_rows($conn)){
    $_SESSION['msg'] = "<p> Usuario apagado com sucesso </p>";
    header("Location: index.php");
  }else {
      $_SESSION['msg'] = "<p> Usuario nao apagado </p>";
      header("Location: index.php");
    }
  }

  else {
    $_SESSION['msg'] = "<p> Necessario selecionar um usuario </p>";
    header("Location: index.php");
  }


 ?>
