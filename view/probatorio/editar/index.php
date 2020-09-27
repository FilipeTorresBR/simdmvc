<?php
session_start();
if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])) {
  header ("Location: ../../login/login.php?erro-insira-seu-login");
}
if ($_SESSION['tipo'] == "Comum") {
  $display = "false";
}else{
  $display = "true";
}
include_once "../../login/conexao.php";
include_once "../../pages.php";
include_once "../../default.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>SIMD</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../../img/fav.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="../../css/cadas.css">
  <link rel="stylesheet" type="text/css" href="../../css/css.css">
  <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
</head>
<body>
<?php 
$idSIAPE = $_GET['q'];
$result_probatorio = "SELECT * FROM probatorio WHERE siape = $idSIAPE";
$resultado_probatorio = mysqli_query($con, $result_probatorio);
$row = mysqli_fetch_assoc($resultado_probatorio);
?>

<div id="user_form" class="box formcad">
<h1>ESTÁGIO PROBATÓRIO</h1>
<br>

<form name="editar" id="editar" action="editar.php?q=<?php echo $idSIAPE;?>" method="POST">
<div class="campo">
<label class="fa fa-calendar"> Início da Primeira Avaliação</label><br>
<input type="date" name="ini1" maxlength="8" id="ini1" value="<?php echo $row['ini1']; ?>" required>
</div>

<div class="campo">
<label class="fa fa-calendar"> Fim da Primeira Avaliação</label><br>
<input type="date" name="fim1" id="fim1" value="<?php echo $row['fim1']; ?>" required>
</div>

<div class="campo">
<label class="fa fa-calendar"> Início da Segunda Avaliação</label><br>
<input type="date" name="ini2" id="ini2" value="<?php echo $row['ini2']; ?>" required>
</div>

<div class="campo">
<label class="fa fa-calendar"> Fim da Segunda Avaliação</label><br>
<input type="date" name="fim2" id="fim2" value="<?php echo $row['fim2']; ?>" required>
</div>

<div class="campo">
<label class="fa fa-calendar"> Início da Terceira Avaliação</label><br>
<input type="date" name="ini3" id="ini3" value="<?php echo $row['ini3']; ?>" required>
</div>

<div class="campo">
<label class="fa fa-calendar"> Fim da Terceira Avaliação</label><br>
<input type="date" name="fim3" id="fim3"  value="<?php echo $row['fim3']; ?>" required>
</div>

<div class="campo">
<label class="fa fa-calendar"> Início da Quarta Avaliação</label><br>
<input type="date" name="ini4" id="ini4" value="<?php echo $row['ini4']; ?>" required>
</div>

<div class="campo">
<label class="fa fa-calendar"> Fim da Quarta Avaliação</label><br>
<input type="date" name="fim4" id="fim4" value="<?php echo $row['fim4']; ?>" required>
</div>

<! ---------------------------------------------------------------------------------------------------------------------------- >
<?php 
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  } 
 ?>

<div class="campo"><br><br><br><br>
      <button value="Alterar">Alterar</button>

</div>
</div>
</form> 
</body>
</html>