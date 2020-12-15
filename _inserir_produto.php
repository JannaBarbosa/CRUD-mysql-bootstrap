<?php
include'conexao.php';
$nroproduto = $_POST['nroproduto'];//Recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];
//Testando se está recebendo os dados do formulário
//echo $nomeproduto;
  $sql = "INSERT INTO `estoque`(`nro_produto`, 
	`nome_produto`, `quantidade_produto`, `categoria_produto`, 
	`fornecedor`) VALUES ($nroproduto,'$nomeproduto',
	$quantidade,'$categoria','$fornecedor')";
	$inserir = mysqli_query($conexao,
		$sql);


?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container"style="width: 500px;margin-top: 20px">
	<center>
	<h4>Produto adicionado com sucesso</h4>
 	</center>
<div style="padding-top: 20px">
	<center>
	<a href="_adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
	</center>
</div>


	
</div>