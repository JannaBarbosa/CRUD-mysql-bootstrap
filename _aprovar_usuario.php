<?php
include 'conexao.php';
$id = $_GET['id'];
$nivel = $_GET['nivel'];
if($nivel == 1){

	$update = "UPDATE usuarios SET status='Ativo', nivelusuario = 1 WHERE id_usuario= $id";
	$atualizacao = mysqli_query($conexao,$update);
			echo "ADMINISTRADOR APROVADO";
}

if($nivel == 2){

	$update = "UPDATE usuarios SET status='Ativo', nivelusuario = 2 WHERE id_usuario= $id";
	$atualizacao = mysqli_query($conexao,$update);
	      echo "FUNCIONÁRIO APROVADO";
}

if($nivel == 3){

	$update = "UPDATE usuarios SET status='Ativo', nivelusuario = 3 WHERE id_usuario= $id";
	$atualizacao = mysqli_query($conexao,$update);
		   echo "CONFERENTE APROVADO";
}


header("Location:aprovar_usuario.php");//redireciona novamente para a página de aprovação

?>