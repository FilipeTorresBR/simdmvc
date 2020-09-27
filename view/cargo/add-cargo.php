<?php

session_start();
require ("../../login/conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$query = mysqli_query($con, "SELECT * FROM cargo WHERE nome = '$nome'");
	$row = mysqli_num_rows($query);


	if ($row > 0){
 		$_SESSION['msg'] = "<p style='color:red'>Cargo existente</p>";
 		header('Location:cargo.php?existente');
 		}else{
 			$sql = mysqli_query($con, "INSERT INTO cargo (nome) VALUES ('$nome')");
 			$_SESSION['msg'] = "<p style='color:green'>Cargo cadastrado!</p>";
 			header('Location:cargo.php?registeredsuccessfully');
 		}

	
?>