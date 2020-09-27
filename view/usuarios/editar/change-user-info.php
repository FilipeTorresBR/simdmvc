<?php
session_start();
require ("../../login/conexao.php");
	$idusuario = $_POST['idusuario'];
	$nome = $_POST['nomecompleto'];
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['confirm-pass']);
	$tipo = $_POST['tipo'];

	$sql = mysqli_query($con, "SELECT senha FROM usuario WHERE idusuario = '$idusuario'");
	$row = mysqli_fetch_assoc($sql);


if ($senha != $row['senha']) {
 	$_SESSION['msg'] = "<p style='color:red'>As senhas devem ser coincidentes.</p>";
 	header ("Location: ../index.php?q=senhaerrada");
	}
else if(mysqli_insert_id($con)) {
		$_SESSION['msg'] = "<p style='color:red;'> Não foi possível alterar os dados do usuário.</p>";
		header("Location: ../index.php?erro");
	}else{
	$query = mysqli_query($con, "UPDATE usuario SET nomecompleto = '$nome', nome = '$usuario', tipo = '$tipo' WHERE idusuario = '$idusuario'");
		$_SESSION['msg'] = "<p style='color:green;'> Os dados do usuário foram atualizados com sucesso!</p>";
		header("Location: ../index.php?q=ok");
}
		
?>