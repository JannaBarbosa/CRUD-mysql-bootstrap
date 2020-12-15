<!DOCTYPE html>
<html>
<head>
	<!--<meta name:"viewport" content="initial-scale=1.0, user-scalable=no"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon"  href="code.png">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style type="text/css">
      	#sombra{
      		padding: 10px;
      		-webkit-box-shadow: 10px 10px 28px -8px rgba(163,160,163,1);
-moz-box-shadow: 10px 10px 28px -8px rgba(163,160,163,1);
box-shadow: 10px 10px 28px -8px rgba(163,160,163,1);
      	}
      </style>
	<title>Cadastro do usuário</title>
</head>
<body>
	
	<div class="container" id ="sombra"style="margin-top: 100px;width: 300px; border-radius:15px; border:2px solid #f3f3f3; ">
		<div style="text-align: right;">
	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
	</div>
		<div style="padding-top: 20px">
	
</div>

		<h4 style="text-align: center;">Cadastro de usuário</h4>
		<form action="_insert_usuario_externo.php" method="post">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" name="nomeusuario"  placeholder="Digite o seu nome" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" class="form-control" name="emailusuario"  placeholder="Digite o seu e-mail" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Senha</label>
				<input type="text" class="form-control" name="senhausuario"  placeholder="Digite uma senha" required autocomplete="off" id="txtSenha">
			</div>
			<div class="form-group">
				<label>Repetir senha</label>
				<input type="text" class="form-control" name="senhausuario2"  placeholder="Repita a senha" required autocomplete="off" 
				oninput="validaSenha(this)">
				<small>Precisa ser igual a senha digitada acima
				</small> 
			</div>
			<div style="text-align: right;">
				<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
			</div>
			
		</form>
	</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript">
	function validaSenha(input){
		if(input.value != document.getElementById('txtSenha').value){
			input.setCustomValidity('Repita a senha corretamente');

		} else{
			input.setCustomValidity('');
		}
	}
</script>
</body>
</html>