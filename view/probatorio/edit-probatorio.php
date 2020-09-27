<div id="probative" class="w3-modal">
	<div class="w3-modal-content" style="background: #dedede; width: 760px;">
		<header class="w3-container green" style="color: white;">
			<span id="sair-add" class="w3-button w3-display-topright">&times;</span>
			<h2>Editar Datas do Estágio Probatório</h2>
		</header>
			<div class="w3-contant">
				<div class="box formcad" style="width: 760px">

					<form name="editar" id="editar" action="editar.php" method="POST">
						<div class="campo">
							<label> Nome do Servidor</label><br>
							<input type="text" name="nome" id="nome" readonly required>
						</div>

						<div class="campo">
							<label>SIAPE</label><br>
							<input type="text" name="siape" id="siape" readonly required>
						</div>

						<div class="campo">
							<label> Início da Primeira Avaliação</label><br>
							<input type="date" name="ini1" id="ini1" required>
						</div>

						<div class="campo">
							<label> Fim da Primeira Avaliação</label><br>
							<input type="date" name="fim1" id="fim1" required>
						</div>

						<div class="campo">
							<label> Início da Segunda Avaliação</label><br>
							<input type="date" name="ini2" id="ini2" required>
						</div>

						<div class="campo">
							<label> Fim da Segunda Avaliação</label><br>
							<input type="date" name="fim2" id="fim2" required>
						</div>

						<div class="campo">
							<label> Início da Terceira Avaliação</label><br>
							<input type="date" name="ini3" id="ini3" required>
						</div>

						<div class="campo">
							<label> Fim da Terceira Avaliação</label><br>
							<input type="date" name="fim3" id="fim3" required>
						</div>

						<div class="campo">
							<label> Início da Quarta Avaliação</label><br>
							<input type="date" name="ini4" id="ini4" required>
						</div>

						<div class="campo">
							<label> Fim da Quarta Avaliação</label><br>
							<input type="date" name="fim4" id="fim4" required>
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
