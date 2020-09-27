<?php
require ("../login/conexao.php");
session_start();
  if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])) {
    header ("Location: ../login/login.php?erro-insira-seu-login");
  }
?>
<DOCTYPE html>
<html lang="pt-br">

	<head>
<meta charset="UTF-8">
	</head>
        <link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
   	<body>
		<div id="relatorio-paisagem-container">

			<div id="ifpa">
				<img SRC="../img/ifpa.gif"></img>
			</div>

			<div id="republica">
				<img SRC="../img/republica.png" width=50px></img>
			</div>

			<div id="texto"> 
				PODER EXECUTIVO<br/>MINISTÉRIO DA EDUCAÇÃO<br/>INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO PARÁ CAMPUS TUCURUÍ<br/>DIRETORIA DE ADMINISTRAÇÃO E PLANEJAMENTO<br/>DIVISÃO DE GESTÃO DE PESSOAS
			</div>
		</div>
<br>
		<body>	
</html>