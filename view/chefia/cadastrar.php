<div id="edit-chefia-modal" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 920px;background: #dedede;" >
  	<header class="w3-container green" style="color: white; background-color: #00c952; cursor: default;">
			<span id="sair" class="w3-button w3-display-topright">&times;</span>
			<h2>Cadastrar Dados Usuário</h2>
  	</header>
		<div class="w3-contant">
			<div class="box formcad">
			  <form action="?c=<?php echo base64_encode("Chefia"); ?>&a=<?php echo base64_encode("cadastrar") ?>" method="POST" >
				  <input type="hidden" name="id" id="id">
				<div class="campo">
					<label for="siape">Nome do Servidor Chefe</label><br>
					<select name="siape" id="siape">
						<option value="">Selecione</option>
						<?php foreach($this->servidores->Listar() as $r): ?>
						<option value="<?php echo $r->siape; ?>"><?php echo $r->siape; ?> - <?php echo $r->Servidor; ?></option>
						<?php endforeach; ?>
					</select> 
				</div>
				<div class="campo">
					<label for="setor">Setor</label><br>
					<select name="setor" id="setor" class="chosen-select">
						<option value="">Selecione</option>
						<?php foreach($this->setor->Listar() as $r): ?>
						<option value="<?php echo $r->id; ?>"><?php echo $r->nome; ?></option>
					<?php endforeach; ?>
					</select>
				</div>
				<div class="campo">
					<label for="inicio_vigencia">Inicio da vigência</label><br>
					<input type="date" name="inicio_vigencia" id="inicio_vigencia">
				</div>
				<div class="campo">
					<label for="portaria">Portaria</label><br>
					<input type="text" name="portaria" id="portaria">
				</div>
			</div>
			<footer class="w3-container" style="padding-bottom: 20px;">
			  <button style="float: right;" type="submit" class="btn-pattern green">Editar</button>
			  <button style="float: right;" type="button" class="btn-pattern blue" id="cancelar" data-dismiss="modal">Cancelar</button>
			</footer>
			</form>
		</div>
  </div>
</div>