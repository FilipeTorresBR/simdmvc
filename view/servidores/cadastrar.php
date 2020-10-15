<div id="add-worker-modal" class="w3-modal" style="z-index: 22;">
	<div class="w3-modal-content" style="background: #dedede;" >
		<header class="w3-container green" style="color: white; background-color: #00c952; cursor: default;">
			<span id="sair-add" class="w3-button w3-display-topright">&times;</span>
			<h2>Cadastrar Usuário</h2>
		</header>
			<div class="w3-contant">
				<div class="box formcad">
					<form title="cadastrar" name="cadastrar" id="cadastrar" action="?c=<?php echo base64_encode("Servidores"); ?>&a=<?php echo base64_encode("cadastrar") ?>" method="POST">
						<div class="campo">
							<label for="nome">Nome do Servidor:</label><br>
							<input type="text" name="nome" id="nome" maxlength="100" style="width: 59em" required>
						</div>

						<div class="campo">
							<label for="rg">RG:</label><br>
							<input type="text"  name="rg" id="rg" required>
						</div>

						<div class="campo">
							<label for="cpf">CPF:</label><br>
							<input type="text" name="cpf" id="cpf" maxlength="14" required>
						</div>

						<div class="campo">
							<label for="titulo_eleitor">Título de Eleitor:</label><br>
							<input type="text" name="titulo_eleitor" id="titulo_eleitor" required>
						</div>

						<div class="campo">
							<label for="mae">Nome da Mãe:</label><br>
							<input type="text" name="mae" id="mae">
						</div>

						<div class="campo">
							<label for="pai">Nome do Pai:</label><br>
							<input type="text" name="pai" id="pai">
						</div>

						<div class="campo">
							<label for="data_nascimento">Data de Nascimento:</label><br>
							<input type="date" name="data_nascimento" id="data_nascimento" min="1900-01-01" max="9999-12-31" required>
						</div>

						<div class="campo">
							<label for="estado">Estado:</label><br>
							<input type="text" name="estado" id="estado">
						</div>

						<div class="campo">
							<label for="cidade">Cidade:</label><br>
							<input type="text" name="cidade" id="cidade">
						</div>

						<div class="campo">
							<label for="bairro">Bairro:</label><br>
							<input type="text" name="bairro" id="bairro">
						</div>

						<div class="campo">
							<label for="rua">Rua:</label><br>
							<input type="text" name="rua" id="rua">
						</div>

						<div class="campo">
							<label for="numero">Número:</label><br>
							<input type="text"  name="numero" id="numero">
						</div>

						<div class="campo">
							<label for="telefone1">Telefone Principal:</label><br>
							<input type="text" name="telefone1" id="telefone1" required>
						</div>

						<div class="campo">
							<label>Telefone Secundário:</label><br>
							<input type="text" maxlength="14" name="fone2" id="fone2">
						</div>

						<div class="campo">
							<label for="siape">SIAPE:</label><br>
							<input type="text"  name="siape" id ="siape" required>
						</div>

						<div class="campo">
							<label for="email">EMAIL:</label><br>
							<input type="email" name="email" id="email">
						</div>

						<div class="campo">
							<label for="escolaridade">Escolaridade:</label><br>
							<select name="escolaridade" id="escolaridade" class="chosen-select" required>
								<option value="">Selecione</option>
								<option value="FUNDAMENTAL">FUNDAMENTAL</option>
								<option value="MÉDIO">MÉDIO</option>
								<option value="SUPERIOR">SUPERIOR</option>
							</select>
						</div>

						<div class="campo">
							<label for="setor">Setor:</label><br>
							<select name="setor" id="setor" class="chosen-select" required>
								<option value="">Selecione</option>
								<?php foreach ($this->setor->Listar() as $s): ?>
								<option value="<?php echo $s->id;?>"><?php echo $s->nome;?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="campo">
							<label for="lotacao">Lotação:</label><br>
							<select name="lotacao" id="lotacao" class="chosen-select" required>
								<option value="">Selecione</option>
								<?php foreach($this->lotacao->Listar() as $s): ?>
								<option value="<?php echo $s->id;?>"><?php echo $s->nome;?></option>
							<?php endforeach; ?>
							</select>
						</div>

						<div class="campo">
							<label for="quadro">Quadro:</label><br>
							<select name="quadro" id="quadro" class="chosen-select" required>
								<option value="">Selecione</option>
								<option value="TAE">TAE</option>
								<option value="DOC">DOC</option>
							</select>
						</div>

						<div class="campo">
							<label for="cargo">Cargo:</label><br> 
							<select name="cargo" id="cargo" class="chosen-select" required>
								<option value="">Selecione</option>
								<?php foreach($this->cargo->Listar() as $s): ?>
								<option value="<?php echo $s->id;?>"><?php echo $s->nome;?></option>
							<?php endforeach; ?>
							</select>
						</div>

						<div class="campo">
							<label for="regime">Regime:</label><br>
							<select name="regime" id="regime" class="chosen-select" required>
								<option value="">Selecione</option>
								<option value="20H">20H</option>
								<option value="40H">40H</option>
								<option value="DE">DE</option>
							</select>
						</div>

						<div class="campo">
							<label for="data_posse">Data de Posse:</label><br>
							<input type="date" name="data_posse" id="data_posse" required>
						</div>

						<div class="campo">
							<label for="data_exercicio">Data de Exercício:</label><br>
							<input type="date" name="data_exercicio" id="data_exercicio" required>
						</div>


						<div class="campo">
							<label for="data_probatorio">Inicio do Estágio Probatório:</label><br>
							<input type="date" name="data_probatorio" id="data_probatorio" required>
						</div>
				</div>
			</div>
		<footer class="w3-container" style="padding-bottom: 20px;">
			<button type="submit" class="edit green" id="addConfirm">Salvar</button>
			<button type="button" class="edit blue" id="cancelar-add" data-dismiss="modal">Cancelar</button>
		</footer>
					</form>
	</div>
</div>
