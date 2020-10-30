<div id="edit-worker-modal" class="w3-modal" style="z-index: 22;">
	<div class="w3-modal-content" style="width: 1200px; background: #dedede;" >
		<header class="w3-container green" style="color: white; background-color: #00c952; cursor: default;">
			<span id="sair-edit" class="w3-button w3-display-topright">&times;</span>
			<h2>Editar dados do servidor</h2>
		</header>
			<div class="w3-contant">
				<div class="box formcad">
					<form name="editar" id="editar" action="?c=<?php echo base64_encode("Servidores"); ?>&a=<?php echo base64_encode("atualizar") ?>" method="POST">
						<input type="hidden" name="id-edit" id="id-edit">
						<div class="campo">
							<label for="nome-edit">Nome do Servidor:</label><br>
							<input type="text" name="nome-edit" id="nome-edit" style="width: 59em" required>
						</div>

						<div class="campo">
							<label for="rg-edit">RG:</label><br>
							<input type="text"  name="rg-edit" id="rg-edit" required>
						</div>

						<div class="campo">
							<label for="cpf-edit">CPF:</label><br>
							<input type="text" name="cpf-edit" id="cpf-edit" required>
						</div>

						<div class="campo">
							<label for="titulo_eleitor-edit">Título de Eleitor:</label><br>
							<input type="text" name="titulo_eleitor-edit" id="titulo_eleitor-edit" required>
						</div>

						<div class="campo">
							<label for="mae-edit">Nome da Mãe:</label><br>
							<input type="text" name="mae-edit" id="mae-edit">
						</div>

						<div class="campo">
							<label for="pai-edit">Nome do Pai:</label><br>
							<input type="text" name="pai-edit" id="pai-edit">
						</div>

						<div class="campo">
							<label for="data_nascimento-edit">Data de Nascimento:</label><br>
							<input type="date" name="data_nascimento-edit" id="data_nascimento-edit" required>
						</div>

						<div class="campo">
							<label for="estado-edit">Estado:</label><br>
							<input type="text" name="estado-edit" id="estado-edit">
						</div>

						<div class="campo">
							<label for="cidade-edit">Cidade:</label><br>
							<input type="text" name="cidade-edit" id="cidade-edit">
						</div>

						<div class="campo">
							<label for="bairro-edit">Bairro:</label><br>
							<input type="text" name="bairro-edit" id="bairro-edit">
						</div>

						<div class="campo">
							<label for="rua-edit">Rua:</label><br>
							<input type="text" name="rua-edit" id="rua-edit">
						</div>

						<div class="campo">
							<label for="numero-edit">Número:</label><br>
							<input type="text"  name="numero-edit" id="numero-edit">
						</div>

						<div class="campo">
							<label for="telefone1-edit">Telefone Principal:</label><br>
							<input type="text" maxlength="14" name="telefone1-edit" id="telefone1-edit">
						</div>

						<div class="campo">
							<label for="telefone2-edit">Telefone Secundário:</label><br>
							<input type="text" maxlength="14" name="telefone2-edit" id="telefone2-edit">
						</div>

						<div class="campo">
							<label for="siape-edit">SIAPE:</label><br>
							<input type="text"  name="siape-edit" id ="siape-edit" required>
						</div>

						<div class="campo">
							<label for="email-edit">EMAIL:</label><br>
							<input type="email" name="email-edit" id="email-edit">
						</div>

						<div class="campo">
							<label for="escolaridade-edit">Escolaridade:</label><br>
							<select name="escolaridade-edit" id="escolaridade-edit" required>
								<option value="">Selecione</option>
								<option value="FUNDAMENTAL">FUNDAMENTAL</option>
								<option value="MÉDIO">MÉDIO</option>
								<option value="SUPERIOR">SUPERIOR</option>
							</select>
						</div>

						<div class="campo">
							<label for="setor-edit">Setor:</label><br>
							<select name="setor-edit" id="setor-edit" required>
								<option value="">Selecione</option>
								<?php foreach ($this->setor->Listar() as $s): ?>
								<option value="<?php echo $s->id;?>"><?php echo $s->nome;?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="campo">
							<label for="lotacao-edit">Lotação:</label><br>
							<select name="lotacao-edit" id="lotacao-edit" required>
								<option value="">Selecione</option>
								<?php foreach($this->lotacao->Listar() as $s): ?>
								<option value="<?php echo $s->id;?>"><?php echo $s->nome;?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="campo">
							<label for="quadro-edit">Quadro:</label><br>
							<select name="quadro-edit" id="quadro-edit" required>
								<option value="">Selecione</option>
								<option value="TAE">TAE</option>
								<option value="DOC">DOC</option>
							</select>
						</div>
						<div class="campo">
							<label>Cargo:</label><br> 
							<select name="cargo-edit" id="cargo-edit" required>
								<option value="">Selecione</option>
								<?php foreach($this->cargo->Listar() as $s): ?>
								<option value="<?php echo $s->id;?>"><?php echo $s->nome;?></option>
							<?php endforeach; ?>
							</select>
						</div>

						<div class="campo">
							<label for="regime-edit">Regime:</label><br>
							<select name="regime-edit" id="regime-edit" required>
								<option value="">Selecione</option>
								<option value="20H">20H</option>
								<option value="40H">40H</option>
								<option value="DE">DE</option>
							</select>
						</div>

						<div class="campo">
							<label for="data_posse-edit">Data de Posse:</label><br>
							<input type="date" name="data_posse-edit" id="data_posse-edit" required>
						</div>

						<div class="campo">
							<label for="data_exercicio-edit">Data de Exercício:</label><br>
							<input type="date" name="data_exercicio-edit" id="data_exercicio-edit" required>
						</div>
				</div>
			</div>
		<footer class="w3-container" style="padding-bottom: 20px;">
			<button type="submit" class="btn-pattern green" id="addConfirm">Salvar</button>
			<button type="button" class="btn-pattern blue" id="cancelar-edit" data-dismiss="modal">Cancelar</button>
		</footer>
					</form>
	</div>
<br><br><br><br><br><br><br><br><br><br>
</div>
