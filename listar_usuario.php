<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon"  href="code.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<title>Listagem de usuários</title>
</head>
<body>
	<div class="container" style="margin-top: 40px">
		<h3>Lista de usuários</h3>
		<br>
		<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nome </th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    
    	<?php
    	include 'conexao.php';
    	$sql = "SELECT * FROM `usuarios`order by nomeusuario ASC";
    	$busca = mysqli_query($conexao,$sql);

    	while($array=mysqli_fetch_array($busca)){
    		$id_usuario = $array['id_usuario'];
    		$nomeusuario = $array['nomeusuario'];
    		$emailusuario = $array['emailusuario'];
    		$senhausuario = $array['senhausuario'];
        $nivelusuario = $array['nivelusuario'];
    		$status = $array['status'];
    		
    
    	?>
    	<tr>
    <td><?php echo $nomeusuario?></td>
    <td><?php echo $emailusuario?></td>
    <td><?php echo $nivelusuario?></td>
    <td><?php echo $status?></td>
    
    <td><a class="btn btn-warning btn-sm" href="editar_usuario.php?id=<?php echo $id_usuario?>" role="button" style="color: #fff"><span class="material-icons">
build_circle
</span>Editar</a></td>
<td>
<a class="btn btn-danger btn-sm" href="_deletar_usuario.php?id=<?php echo $id_usuario?>" role="button" style="color: #fff"><span class="material-icons">
delete
</span>Excluir</a>
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

