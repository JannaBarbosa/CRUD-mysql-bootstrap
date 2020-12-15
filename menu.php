<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<meta charset="utf-8">
  <!-- como colocar um favicon na barra de endereços/aba do navagador no site-->
  <link rel="shortcut icon"  href="code.png">
	<title>Menu</title>
  <style type="text/css"> 
    #sombra{

      -webkit-box-shadow: 10px 10px 25px -10px rgba(163,160,163,1);
-moz-box-shadow: 10px 10px 25px -10px rgba(163,160,163,1);
box-shadow: 10px 10px 25px -10px rgba(163,160,163,1);
    }
    /* para aplicar sombra , pesquisar no google por box shadow css generator ajustar a sombra e copiar o código e colar aqui*/
    
      
    
  </style>
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
 
<div class="container" id="sombra" style="margin-top: 100px; padding: 50px;">
<div style="text-align: right; margin: 5px;" ><a href="index.php" role="button" class="btn btn-md btn-primary">Sair</a>
  </div>
	<div class="row">
<?php
if(($nivel==1)||($nivel==2)||($nivel==3)){



?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar produto</h5>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="_adicionar_produto.php" class="btn btn-primary">Cadastrar produto</a>
        
        <a href="listar_produtos.php" class="btn btn-primary">Listar produtos</a>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php
  
  ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar categoria</h5>
        <p class="card-text">Opção para adicionar categoria de produtos.</p>
        <a href="_adicionar_categoria.php" class="btn btn-primary">Cadastrar categoria</a>
        <a href="listar_categorias.php" class="btn btn-primary">Listar categorias</a>
      </div>
    </div>
  </div>


  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar fornecedores</h5>
        <p class="card-text">Opção para adicionar fornecedores.</p>
        <br>

        <a href="_adicionar_fornecedor.php" class="btn btn-primary">Cadastrar fornecedores</a>
        <a href="listar_fornecedores.php" class="btn btn-primary">Listar fornecedores</a>
      </div>
    </div>
  </div>
   <?php
     if($nivel==1){  

   ?>
   <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar usuários </h5>
        <p class="card-text">Aprovar usuários cadastrados
          <br>
          <br>
        </p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar usuários</a>
        <a href="listar_usuario.php" class="btn btn-primary">Listar usuários</a>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar usuários</a>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>