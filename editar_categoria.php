<?php
include 'conexao.php';
 $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Formulário de cadastro de categorias</title>
	<style type="text/css">
		#tamanhocontainer {
			width: 500px;
		}
		#botao{
			background-color: #F10879;
			color: #ffffff;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container" id="tamanhocontainer" style="margin-top: 40px">
		<h4>
			
		 Cadastro de categorias
		</h4>
<form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
	<?php 
	$sql ="SELECT * FROM `categoria` WHERE id_categoria = $id";
	$buscar = mysqli_query($conexao,$sql);

	while($array= mysqli_fetch_array($buscar)){
		$id_categoria = $array['id_categoria'];
    		$nome_categoria = $array['categoria'];
    		

	 ?>
	<div class="form-group">
    <label >Nome Categoria</label>
    <input type="text" class="form-control" name="categoria" value="<?php echo $nome_categoria; ?>">
    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>"  >
   <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   	texto de ajuda que aparece debaixo do input
   -->
    </div>
  
  <div style="text-align: right;">
    <a href="listar_categorias.php" role="button" class="btn btn-sm btn-primary">Voltar</a>

   <button type="submit" class="btn btn-sm" id="botao">Atualizar</button>
</div>
  </div>
  
</div>
  
<?php } ?>
</form>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>






