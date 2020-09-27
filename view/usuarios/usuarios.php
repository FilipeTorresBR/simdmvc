<div class="list-options-position">
	<form>
	<a add-user="Tem Certeza?" href="#" class="btn-pattern green" id="<?php echo $display; ?>">Cadastrar</a>
		<label for="choose-results"></label>
		<select name="choose-results" class="choose-results" required>
			<option value="20" <?php if($qnt_result_pg == "20"){echo "selected";} ?>>Exibir 20 resultados</option>
			<option value="30" <?php if($qnt_result_pg == "30"){echo "selected";} ?>>Exibir 30 resultados</option>
			<option value="50" <?php if($qnt_result_pg == "50"){echo "selected";} ?>>Exibir 50 resultados</option>
		</select>
		<button type="submit" class="btn-pattern blue">IR</button>
	</form>
</div>
<table class="content-table">
  <thead>
		<tr>
		  <th id="<?php echo $display;?>">Ação</th>
		  <th class="thsticky">Nome completo</th>
		  <th>Login</th>
		  <th>Nível de acesso</th>
		</tr>
  </thead>
  <tbody>
	<?php foreach($this->model->Listar() as $r): ?>
	<tr>
	  <td <?php echo $display;?>>
		<div class="tooltip green">
		  <span class="tooltiptext">Editar Usuário</span>
		  <a href="#" id="trigger-modal" edit-confirm="Tem Certeza?" data-idusuario="<?php echo $r->idusuario; ?>" data-nomecompleto="<?php echo $r->nomecompleto; ?>" data-usuario="<?php echo $r->nome; ?>" data-tipo="<?php echo $r->tipo; ?>" class="btn-pattern green">
			<span class="fa fa-pencil-alt"></span>
		  </a>
		</div>
		<div class="red tooltip">
		  <span class="tooltiptext">Excluir Usuário</span>
		  <a delete-confirm="Tem Certeza?" data-id = "<?php echo $r->idusuario ?>" class="btn-pattern red">
			<i class="fa fa-trash"></i>
		  </a>
		</div>
	  </td>
	  <td class="tdsticky"><?php echo $r->nomecompleto; ?></td>
	  <td><?php echo $r->nome; ?></td> 
	  <td><?php echo $r->tipo; ?></td>
	</tr>    
    <?php endforeach; ?>
  </tbody>
</table>
<?php 
//include_once "../pagination.php";
?>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/chosen.jquery.js"></script>
<script type="text/javascript" src="../js/prism.js"></script>
<script type="text/javascript" src="../js/init.js"></script>
<script type="text/javascript" src="../js/modal.js"></script>
<script type="text/javascript">
	$('.users').addClass('clicked');
</script>
</body>
</html>