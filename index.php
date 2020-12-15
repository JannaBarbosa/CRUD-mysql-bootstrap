<!DOCTYPE html>
<html> 
<head>
	<link rel="shortcut icon"  href="code.png">
	<!--<meta name:"viewport" content="initial-scale=1.0, user-scalable=no"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style type="text/css">
      	#tamanho{
      		-webkit-box-shadow: 10px 10px 28px -8px rgba(163,160,163,1);
-moz-box-shadow: 10px 10px 28px -8px rgba(163,160,163,1);
box-shadow: 10px 10px 28px -8px rgba(163,160,163,1);
      	}
      </style>
	<title>Login</title>
</head>
<body>
	<div class="container" id ="tamanho" style="margin-top: 100px;width: 300px; border-radius:15px; border:2px solid #f3f3f3; ">
		<div style="padding: 10px">
			<h4 style="text-align: center;">Login</h4>
		<center>
		<img src="usuario.png" width="100px" height="100px">
	</center>
		<form action="index1.php" method="post">
			<div class="form-group">
				<label>Usuário:</label>
				<input type="text" name="usuario" class="form-control"  placeholder="Digite seu e-mail" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Senha:</label>
				<input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required autocomplete="off">
			</div>
		
		<div style="text-align: right;">
			<button class="btn btn-sm btn-success" type="submit">Entrar</button>
		</div>
		</form>
	</div>
	</div>

<div style="margin-top: 10px">
<center>
	<small>Você não possui cadastro clique <a href="cadastro_usuario_externo.php">Aqui</a></small>
</center>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>