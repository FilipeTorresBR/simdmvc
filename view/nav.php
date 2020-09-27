<?php
if(!isset($_SESSION["id"])){
	header("Location: ?c=".base64_encode('Login'));
}
if ($_SESSION['tipo'] == "Administrador") {
	$display = "true";
}else{
	$display = "false";
}
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>SIMD</title>
	  <meta charset="utf-8">
	  <link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon" />
	  <link rel="stylesheet" type="text/css" href="assets/css/w3.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/usuario.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/simd.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/cadas.css">
	  <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	</head>
<body>
	<div class="container">
		<header class="top-bar">
			<form title="search" action="?c=<?php echo base64_encode('Pesquisar'); ?>" method="post" style="display: inline;">
				<input type="text" name="search" class="search" placeholder="Pesquisar por nome ou SIAPE" autocomplete="off" required>
				<button type="submit" class="search-button fa fa-search"></button>
			</form>
				<div onmouseover="MostrarUser()" onmouseleave="OcultarUser()"><button type="button" class="user-icon">FT</button>
					<ul class="user-drop">
						<li>Alterar dados</li>
						<li>Escolher tema</li>
						<li>Sair</li>
					</ul>
				</div>
		</header>

		<div class="brand">
			<img src="assets/img/simd.png"><br>
			<span>SIMD</span>
		</div>

		<nav class="navigation">
			<div class="nav-buttons">
				<a href="?c=<?php echo base64_encode('Home'); ?>" class="home"><li>Home</li></a>
				<a href="?c=<?php echo base64_encode('Usuarios'); ?>" class="users"><li>Usuários</li></a>
				<a href="?c=<?php echo base64_encode('Probatorio'); ?>" class="probatorio"><li>Estágio Probatório</li></a>
				<a href="?c=<?php echo base64_encode('Servidores'); ?>" class="servidores"><li>Servidores</li></a>
				<div onmouseover="MostrarInst()" onmouseleave="OcultarInst()"><a href="#" class="instituicao"><li>Instituição</li></a>
				  <ul class="inst-drop">
						<li><a href="?c=<?php echo base64_encode('Chefia'); ?>">Chefias</a></li>
						<li><a href="?c=<?php echo base64_encode('Setor'); ?>">Setores</a></li>
						<li><a href="?c=<?php echo base64_encode('Cargo'); ?>">Cargos</a></li>
						<li><a href="?c=<?php echo base64_encode('Lotacao'); ?>">Lotações</a></li> 
					</ul>
				</div>
			</div>
		</nav>
	</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modal.js"></script>
<script type="text/javascript" src="assets/js/simd.js"></script>