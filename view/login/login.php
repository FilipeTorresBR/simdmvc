<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>SIMD</title>
	<meta charset="utf-8">
  <link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/simd.css">
  <link rel="stylesheet" href="assets/css/form.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>
<body>
  <div class="lateral">
    <img src ="assets/img/simd.png" alt="Sistema Interno de Manipulação de Dados">
    <h2>SIMD</h2>
    <a href="sobre.html">Sobre nós</a>
	</div>
	<form class="box" action="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Entrar'); ?>" method="POST">
    <img src="assets/img/if.png" alt="Instituto Federal do Pará">
      <input type="text" name='usuario' id="usuario" placeholder="Usuário" required />
      <input type="password" name="pass" id="senha" placeholder="Senha" required />
      <?php
        if (base64_decode($_GET['m']) == "campovazio") {
          echo "<div class='fa fa-exclamation-triangle loginerro'></div> <div class='loginerro'>Preencha todos os campos</div>";
        }
        if (base64_decode($_GET['m']) == "loginerrado") {
          echo "<div class='fa fa-exclamation-triangle loginerro'></div> <div class='loginerro'>Usuario ou senha incorretos</div>";
        }
      ?>
      <input type="submit" value="Entrar" />
    </form>
</body>

</html>