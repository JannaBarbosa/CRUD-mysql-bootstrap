<?php
include 'conexao.php';

  $categoria = $_POST['categoria'];

$sql= "INSERT INTO `categoria`( `categoria`) VALUES ('$categoria')";
 $inserir = mysqli_query ($conexao,$sql);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container"style="width: 500px;margin-top: 20px">
	<center>
	<h4 style="color: green;">
	Categoria adicionada com sucesso!</h4>
 	</center>
<div style="padding-top: 20px">
	<center>
	<a href="_adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova categoria</a>
	<center>
	<a href="menu.php" role="button" class="btn btn-sm btn-secondary" style="margin-top: 10px;">Voltar a página principal</a>
	</center>
	</center>
</div>


	
</div>