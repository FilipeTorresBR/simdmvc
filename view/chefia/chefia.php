<div class="list-options-position">
	<form>
		<a <?php echo $display;?> href="#" class="btn-pattern green">Cadastrar</a>
		<label for="choose-results"></label>
		<select name="choose-results" class="choose-results" required>
			<option value="20" <?php if($qnt_result_pg == "20"){echo "selected";}?>>Exibir 20 resultados</option>
			<option value="30" <?php if($qnt_result_pg == "30"){echo "selected";}?>>Exibir 30 resultados</option>
			<option value="50" <?php if($qnt_result_pg == "50"){echo "selected";}?>>Exibir 50 resultados</option>
		</select>
		<button type="submit" class="btn-pattern blue">IR</button>
	</form>
</div>
<table class="content-table">
	<thead>
		<tr>
	  	<th id="<?php echo $display; ?>">Ação</th>
			<th>Chefe</th>
			<th>SIAPE</th>
			<th>Setor</th>
			<th>Portaria</th>
			<th>Inicio da vigência</th>
	    <th>Última Modificação</th>
	    <th>Data de Criação</th>
		</tr>
	</thead>
	<tbody>	
		<?php	foreach($this->model->Listar() as $r): ?>
		<tr>
      <td id="<?php echo $display ?>">
      	<div class="tooltip green">
      		<span class="tooltiptext green">Editar dados</span>
      		<a href = "cadastro/edicao_chefia.php?q=<?php echo $r->siape; ?>" class="btn-pattern green">
      			<i class="fa fa-pencil-alt"></i>
      		</a>
      	</div>
      </td>
			<td><?php echo $r->Servidor; ?></td>
			<td><?php echo $r->siape; ?></td>
			<td><?php echo $r->Setor; ?></td>
			<td><?php echo $r->portaria; ?></td>
			<td><?php echo date('d/m/Y', strtotime($r->inicio_vigencia)); ?></td>', 
			<td><?php echo date("d/m/Y H:i:s", strtotime($r->modificacao)); ?></td>',
			<td><?php echo date("d/m/Y H:i:s", strtotime($r->criacao)); ?></td>',
	  </tr>
<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>