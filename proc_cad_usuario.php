<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$telefone =filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
//echo "Nome:$nome <br>" ;
//echo "Email:$email";
$result_usuarios = "INSERT INTO usuarios(nome,email,telefone,created) VALUES('$nome','$email','$telefone',NOW())";
$resultado_usuarios = mysqli_query($conn,$result_usuarios);
if (mysqli_insert_id($conn)) {
  $_SESSION['msg']= "<p>Usuario Cadastrado com Sucesso</p>";
  header("Location: index.php");
}else{
  $_SESSION['msg']= "<p>Usuario nao cadastrado</p>";
  header("Location: cad_usuario.php");
  }





 ?>
