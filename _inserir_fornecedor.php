
<?php
include "conexao.php";

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `fornecedor`(`nome_fornecedor`) VALUES ('
$fornecedor')";
$inserir = mysqli_query($conexao,$sql);

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container"style="width: 500px;margin-top: 20px">
	<center>
	<h4 style="color: green;">
	Fornecedor adicionado com sucesso!</h4>
 	</center>
<div style="padding-top: 20px">
	<center>
	<a href="_adicionar_fornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo fornecedor</a>
	<center>
	<a href="menu.php" role="button" class="btn btn-sm btn-secondary" style="margin-top: 10px;">Voltar a página principal</a>
	</center>
	</center>
</div>