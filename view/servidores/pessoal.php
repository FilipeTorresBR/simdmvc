<div class="list-options-position">
	<form>
		<a href="?c=<?php echo base64_encode("Servidores"); ?>" class="btn-pattern blue">Mostrar dados institucionais</a>
		<a <?php echo $display;?> href="#" class="btn-pattern green" cadastrar-servidor>Cadastrar</a>
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
			<th class="thsticky">Servidor</th>
			<th>SIAPE</th>
			<th>RG</th>
			<th>CPF</th>
			<th>Titulo de Eleitor</th>
			<th>Data de Nascimento</th>
			<th>Mãe</th>
			<th>Pai</th>
			<th>E-mail</th>
			<th>Estado</th>
			<th>Cidade</th>
			<th>Bairro</th>
			<th>Rua</th>
			<th>Nº</th>
			<th>Telefone Principal</th>
			<th>Telefone Secundário</th>
      <th>Modificado em</th>
      <th>Cadastrado em</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($this->model->Listar() as $r): ?>
		<tr>
    	<td id="<?php echo $display; ?>">
    		<div class="tooltip green">
    			<span class="tooltiptext">Editar dados</span>
					<a href="#" data-id="<?php echo $r->id; ?>" data-nome="<?php echo $r->Servidor; ?>" data-rg="<?php echo $r->rg; ?>" data-cpf="<?php echo $r->cpf; ?>" data-titulo_eleitor="<?php echo $r->titulo_eleitor; ?>" data-mae="<?php echo $r->mae; ?>" data-pai="<?php echo $r->pai; ?>" data-data_nascimento="<?php echo $r->data_nascimento; ?>" data-escolaridade="<?php echo $r->escolaridade; ?>" data-email="<?php echo $r->email; ?>" data-estado="<?php echo $r->estado; ?>" data-cidade="<?php echo $r->cidade; ?>" data-bairro="<?php echo $r->bairro; ?>" data-rua="<?php echo $r->rua; ?>" data-numero="<?php echo $r->numero; ?>" data-siape="<?php echo $r->siape; ?>" data-data_posse="<?php echo $r->data_posse; ?>" data-data_exercicio="<?php echo $r->data_exercicio; ?>" data-telefone1="<?php echo $r->telefone1; ?>" data-telefone2="<?php echo $r->telefone2; ?>" data-lotacao="<?php echo $r->id_lotacao; ?>" data-quadro="<?php echo $r->quadro; ?>" data-cargo="<?php echo $r->id_cargo; ?>" data-regime="<?php echo $r->regime; ?>" data-setor="<?php echo $r->id_setor; ?>" edit-servidor="tem certeza?" class="btn-pattern green">
    				<i class="fa fa-pencil-alt"></i>
    			</a>
    		</div>
    	</td>
			<td class="tdsticky"><?php echo $r->Servidor; ?></td>
			<td><?php echo $r->siape; ?></td>
			<td><?php echo $r->rg; ?></td>
			<td><?php echo $r->cpf; ?></td> 
			<td><?php echo $r->titulo_eleitor; ?></td>
			<td><?php echo date("d/m/Y", strtotime($r->data_nascimento)); ?></td>
			<td><?php echo $r->mae; ?></td>
			<td><?php echo $r->pai; ?></td>
			<td><?php echo $r->email; ?></td>
			<td><?php echo $r->estado; ?></td>
			<td><?php echo $r->cidade; ?></td>
			<td><?php echo $r->bairro; ?></td>
			<td><?php echo $r->rua; ?></td>
			<td><?php echo $r->numero; ?></td>
			<td><?php echo $r->telefone1; ?></td>
			<td><?php echo $r->telefone2; ?></td>
			<td><?php echo date("d/m/Y H:i:s", strtotime($r->modificacao)); ?></td>
			<td><?php echo date("d/m/Y H:i:s", strtotime($r->criacao)); ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<script type="text/javascript">
	$('.servidores').addClass('clicked');
</script>
