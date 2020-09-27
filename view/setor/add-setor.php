<?php
session_start();
require ("../../login/conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$query = mysqli_query($con, "SELECT * FROM setor WHERE nome = '$nome'");
	$row = mysqli_num_rows($query);


	if ($row > 0){
 		$_SESSION['msg'] = "<p style='color:red'>Setor existente</p>";
 		header('Location:setor.php?existente');
 		}else{
 			$sql = mysqli_query($con, "INSERT INTO setor (nome) VALUES ('$nome')");
 			$_SESSION['msg'] = "<span style='color:green'>Setor cadastrado!</span>";
 			header('Location:setor.php?registeredsuccessfully');
 		}

	
?>