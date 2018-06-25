<?php
session_start();
include_once("conexao.php");
$id= filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$telefone= filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
//echo "Nome:$nome <br>" ;
//echo "Email:$email";
$result_usuarios = "UPDATE usuarios SET nome='$nome',email='$email',telefone='$telefone',modified =NOW() WHERE id='$id'";
$resultado_usuarios = mysqli_query($conn,$result_usuarios);
if (mysqli_affected_rows($conn)) {
  $_SESSION['msg']= "<p>Usuario Editado com Sucesso</p>";
  header("Location: index.php");
}else{
  $_SESSION['msg']= "<p>Usuario nao Editado</p>";
  header("Location: editar.php?id=$id");
  }





 ?>
