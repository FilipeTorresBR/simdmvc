<div id="add-user-modal" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
  <header class="w3-container green" style="color: white;">
	<span id="sair-add" class="w3-button w3-display-topright">&times;</span>
	<h2>Cadastrar Usuário</h2>
  </header>
	<div class="w3-contant" style="margin-left:70px;">
	  <form class="box" action="add-user.php" method="post">
		<label for="nomecompleto-add">Nome Completo do Servidor:</label><br>
		  <input type="text" name="nomecompleto-add" id="nomecompleto-add" placeholder="Nome completo" required /><br>
		<label for="usuario-add">Nome de usuário:</label><br>
		  <input type="text" name="usuario-add" id="usuario-add" autocomplete="false" placeholder="nome.sobrenome" required/><br>
		<label for="pass-add">Senha:</label><br>
		  <input type="password" name="pass-add" minlength="8" id="pass-add" placeholder="Digite sua senha" required/><br>
		<label for="confirm-pass-add">Confirmar Senha:</label><br>
		  <input type="password" name="confirm-pass-add" minlength="8" id="confirm-pass-add" onchange="validatepass();" placeholder="Digite novamente sua senha" required/><br>
		<label for="tipo-add">Nível de Acesso:</label><br>
		  <input type="radio" name="tipo-add" id="comum-add" value="0" required> Comum
		  <input type="radio" name="tipo-add" id="adm-add" value="1" required> Administrador 
	</div>
		<footer class="w3-container" style="padding-bottom: 20px;">
		  <button type="submit" class="edit green" id="addConfirm">Cadastrar</button>
		  <button type="button" class="edit blue" id="cancelar-add" data-dismiss="modal">Cancelar</button>
		</footer>
	  </form>
  </div>
</div>