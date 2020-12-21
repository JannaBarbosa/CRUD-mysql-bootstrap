<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senha1 = $_POST['senha'];

$sql = "SELECT  `emailusuario`,`senhausuario` FROM `usuarios` WHERE emailusuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);	

 $total = mysqli_num_rows($buscar);
 #echo $total;

 if($total==0){header("Location:erro.php"); }
 else {

 	while ($array = mysqli_fetch_array($buscar)) {
 	$usuariocadastrado = $array['emailusuario'];
 	$senha = $array['senhausuario'];
    $senhadecodificada = sha1($senha1);

    if(($usuario == $usuariocadastrado)and($senhadecodificada == 
 		$senha)){

    	session_start();
 		$_SESSION['usuario'] = $usuario;
 		header("Location:menu.php");
  } else{
  	header("Location:erro1.php");
  }



 }

}
 

?>