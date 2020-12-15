<?php
include 'conexao.php';
 $id = $_POST['id'];

//$nroproduto = $_POST['nro_produto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

  $sql = "UPDATE `estoque` SET `nome_produto`='$nomeproduto',`quantidade_produto`=$quantidade,`categoria_produto`='categoria',`fornecedor`='$fornecedor' WHERE id_estoque =$id";
$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<div class="container" style="width: 400px;">
	<center>
		<h3> Atualizado com sucesso!</h3>
		<div style="margin-top: 10px">
		<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
	</div>
	</center>
</div>