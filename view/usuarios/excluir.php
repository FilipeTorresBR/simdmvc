
<div id="excluir-usuario" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
  <header class="w3-container green" style="color: white; background-color: #ff6961; cursor: default;">
			<span class="w3-button w3-display-topright" sair>&times;</span>
			<h2>Excluir Usuário</h2>
		</header>
	<div class="w3-contant" style="margin-left:70px;">
	  <form class="box" action="?c=<?php echo base64_encode("Usuarios"); ?>&a=<?php echo base64_encode("excluirUsuario") ?>" method="post" enctype="multipart/form-data">
		<p>Você tem certeza que deseja excluir o usuário <strong id=usuario-del></strong> (<strong id="nome-del"></strong>)? Essa ação não poderá ser desfeita.</p><br>
		  <input type="hidden" name="id-input" id="id-input">
		  <input type="hidden" name="administrador-input" id="administrador-input">
		<label for="nomecompleto">Nome Completo:</label><br>
		  <input type="text" name="nome-input" id="nome-input" readonly /><br>
		<label for="usuario">Usuário:</label><br>
		  <input type="text" name="usuario-input" id="usuario-input" readonly />
	</div>
		<footer class="w3-container">
			<button type="submit" class="btn-pattern red">Excluir</button>
			<button type="button" class="btn-pattern blue" cancelar>Cancelar</button><br><br>
		</footer>
		</form>
	</div>
</div>
