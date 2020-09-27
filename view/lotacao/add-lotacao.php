<?php

session_start();
require ("../../login/conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$query = mysqli_query($con, "SELECT * FROM lotacao WHERE nome = '$nome'");
	$row = mysqli_num_rows($query);


	if ($row > 0){
 		$_SESSION['msg'] = "<p>Lotação existente</p>";
 		header('Location:lotacao.php?existente');
 		}else{
 			$sql = mysqli_query($con, "INSERT INTO lotacao (nome) VALUES ('$nome')");
 			$_SESSION['msg'] = "<p style='color:green'>Lotação cadastrada!</p>";
 			header('Location:lotacao.php?registeredsuccessfully');
 		}

	
?>