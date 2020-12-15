<?php
include 'conexao.php';
include 'script/password.php';

 $nomeusuario =$_POST['nomeusuario'];
$emailusuario =$_POST['emailusuario'];
$senhausuario =$_POST['senhausuario'];
$nivel =0;
$status = 'Inativo';

$sql = "INSERT INTO `usuarios`( `nomeusuario`, `emailusuario`, `senhausuario`, `nivelusuario`, `status`) VALUES ('$nomeusuario','$emailusuario',sha1('$senhausuario'),$nivel,
'$status')";

$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container"style="width: 500px;margin-top: 20px">
	<center>
	<h4 style="color: green;">
	Usuário adicionado com sucesso,esperando aprovação</h4>
 	</center>
<div style="padding-top: 20px">
	<center>
	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
	</center>
</div>


	
</div>