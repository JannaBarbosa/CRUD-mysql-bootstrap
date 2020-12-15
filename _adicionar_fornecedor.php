<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Formulário de cadastro de fornecedores</title>
	<style type="text/css">
		#botao{
			background-color: #F10879;
			color: #ffffff;
			font-weight: bold;
		}
	</style>
</head>
<body>
<div class="container" style="margin-top: 40px; width: 500px;">
	<h4>Cadastro de fornecedores</h4>
	<form action="_inserir_fornecedor.php" method="post">
		<div class="form-group">
			<label>Fornecedor:</label>
			<input type="text" class ="form-control "name="fornecedor" name="fornecedor" placeholder="Digite o nome do fornecedor" required autocomplete="off">
		</div>
		<div style="text-align: right;">
				<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			<button type="submit" class="btn  btn-sm" id="botao">
				Cadastrar
			</button>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>