<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon"  href="code.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<title>Listagem de produtos</title>
</head>
<body>

  <?php
  include 'conexao.php';

session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
  header('Location:index.php');
}

$sql = "SELECT nivelusuario FROM usuarios WHERE emailusuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
  $nivel = $array['nivelusuario'];

  ?>
	<div class="container" style="margin-top: 40px">
		<h3>Lista de Produtos</h3>
		<br>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    
    	<?php
    	include 'conexao.php';
    	$sql = "SELECT * FROM `estoque`order by nome_produto ASC";
    	$busca = mysqli_query($conexao,$sql);

    	while($array=mysqli_fetch_array($busca)){
    		$id_estoque = $array['id_estoque'];
    		$nro_produto = $array['nro_produto'];
    		$nome_produto = $array['nome_produto'];
    		$quantidade_produto = $array['quantidade_produto'];
    		$categoria_produto = $array['categoria_produto'];
    		$fornecedor = $array['fornecedor'];
    
    	?>
    	<tr>
    <td><?php echo $nro_produto?></td>
    <td><?php echo $nome_produto?></td>
    <td><?php echo $quantidade_produto?></td>
    <td><?php echo $categoria_produto?></td>
    <td><?php echo $fornecedor?></td>
    <td>
       <?php
if(($nivel==1)||($nivel==2)){

  ?>
      <a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque?>" role="button" style="color: #fff"><span class="material-icons">
build_circle
</span>Editar</a></td>
<?php } ?>
<td>
 <?php
 if ($nivel==1){

 ?>
<a class="btn btn-danger btn-sm" href="_deletar_produto.php?id=<?php echo $id_estoque?>" role="button" style="color: #fff"><span class="material-icons">
delete
</span>Excluir</a>
<?php }?>
</td>


    

<?php } ?>
    </tr>
    
  </tbody>
</table>
<div style="text-align: right;">
  <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>
	</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

