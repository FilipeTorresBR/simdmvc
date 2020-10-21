<form id="user_form" class="box formcad" action="editando_chefia.php" method="post" style="width: 50%;">
<h2>ALTERAR CHEFIA</h2>

	<input type="hidden" name="id" value="<?php echo $idSIAPE; ?>">
<div class="campo">
	<label>Chefe:</label><br> 
		<select name="siape" id="siape" class="chosen-select" required>
			<option>Selecione</option>
			<?php 
			$servidor_select = "SELECT * FROM servidor";
			$result_servidor = mysqli_query($con, $servidor_select);
			while ($row_servidor = mysqli_fetch_assoc($result_servidor)) {
			?>
			<option value="<?php echo $row_servidor['siape'];?>"
			<?php if ($row_servidor['siape'] == $row['siape']){
				echo "selected";
			}
			?>>

	<?php echo $row_servidor['siape'] . ' - ' . $row_servidor['nome'];?>
			
	</option>
	<?php } ?>
	</select>
</div>


<div class="campo">
<label>Setor: <?php echo $ser_setor; ?></label><br> 
	<select name="setor" id="setor" class="chosen-select" required>
	<option>Selecione</option>
	<?php 
	$setor_select = "SELECT * FROM setor";
	$result_setor = mysqli_query($con, $setor_select);
	while ($row_setor = mysqli_fetch_assoc($result_setor)) {
	?>
		<option value="<?php echo $row_setor['id'];?>"
		<?php if ($row_setor['id'] == $row['setor']){
		echo "selected";
	}
	?>>
		<?php echo $row_setor['nome'];?>
			
	</option>
	<?php } ?>
	</select>
</div>

<div class="campo">
	<label>Portaria:</label><br>
		<input type="text" name="portaria" id="portaria" value="<?php echo $row['portaria']; ?> "/>
</div>

<div class="campo">
	<label>Início da vigência:</label><br>
		<input type="date" name="vigencia" id="vigencia" value="<?php echo $row['inicio_vigencia']; ?>" required/>
</div> 

<div class="campo">
		<?php
		if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
		?>
	<button value="Cadastrar">Alterar</button>
</div>
</form>
  <script src="../../js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="../../js/chosen.jquery.js" type="text/javascript"></script>
  <script src="../../js/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="../../js/init.js" type="text/javascript" charset="utf-8"></script>  
</body>	
</html>