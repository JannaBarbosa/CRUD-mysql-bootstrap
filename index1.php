<?php
include 'conexao.php';
include 'script/password.php';


$usuario = $_POST['usuario'];
$senha1 = $_POST['senha'];



$sql = "SELECT  `emailusuario`,`senhausuario` FROM `usuarios` WHERE emailusuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);	
 $total = mysqli_num_rows($buscar);

 while ($array = mysqli_fetch_array($buscar)) {
 	$senha = $array['senhausuario'];

 	$senhadecodificada = sha1($senha1);


 if($total > 0){
# Conferir a senha
 	if($senhadecodificada == $senha){
 		session_start();
 		$_SESSION['usuario'] = $usuario;
 		header("Location:menu.php");
 	} else{
 		header("Location:erro.php");
 }
 	}
  else { 

 	header("Location:erro.php");
 }

 }

?>