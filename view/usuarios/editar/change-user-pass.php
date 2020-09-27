<?php
session_start();
require ("../../login/conexao.php");

	$idusuario = $_POST['idusuario-pass'];
	$pass = md5($_POST['change-pass']);
	$passConfirm = md5($_POST['change-pass-confirm']);


	$sql = mysqli_query($con, "SELECT senha FROM usuario WHERE idusuario = '$idusuario'");
	$row = mysqli_fetch_assoc($sql);


if ($pass != $passConfirm) {
 	$_SESSION['msg'] = "<p style='color:red'>As senhas devem ser iguais.</p>";
 	header ("Location: ../index.php?q=senhaerrada");
	}
else if(mysqli_insert_id($con)) {
		$_SESSION['msg'] = "<p style='color:red;'> Não foi possível alterar os dados do usuário.</p>";
		header("Location: ../index.php?erro");
	}else{
	$query = mysqli_query($con, "UPDATE usuario SET senha = '$pass' WHERE idusuario = '$idusuario'");
		$_SESSION['msg'] = "<p style='color:green;'> Os dados do usuário foram atualizados com sucesso!</p>";
		header("Location: ../index.php?q=ok");
}
		
?>