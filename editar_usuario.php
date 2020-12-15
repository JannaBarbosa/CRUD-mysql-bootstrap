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
	<title>Formulário de Cadastro</title>
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
			
			formulário de Cadastro
		</h4>
<form action="_atualizar_usuario.php" method="post" style="margin-top: 20px">
	<?php 
	$sql ="SELECT * FROM `usuarios` WHERE id_usuario = $id";
	$buscar = mysqli_query($conexao,$sql);

	while($array= mysqli_fetch_array($buscar)){
		$id_usuario = $array['id_usuario'];
    		$nomeusuario = $array['nomeusuario'];
    		$emailusuario = $array['emailusuario'];
    		$senhausuario = $array['senhausuario'];
    		$nivelusuario = $array['nivelusuario'];
    		$status = $array['status'];




	 ?>
  <div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" name="nomeusuario" value="<?php echo $nomeusuario; ?>" >
    <input type="hidden" class="form-control" name="id"  
    value="<?php echo $id_usuario; ?>"  >
 </div>
 <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $emailusuario; ?>">
 </div>

 <div class="form-group">
    <label >Nível</label>
    <input type="number" class="form-control" name="nivel" value="<?php echo $nivelusuario; ?>">
  </div>
  <div class="form-group">
    <label >Status</label>
    <input type="text" class="form-control" name="status" value="<?php echo $status; ?>">
 </div>
  
  <div style="text-align: right;">
    
  <a href="listar_usuario.php" role="button" class="btn btn-sm btn-primary">Voltar</a>

   <button type="submit" class="btn btn-sm" id="botao">
    Atualizar
   </button>
</div>
<?php } ?>
</form>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  
</script>
</body>
</html>






