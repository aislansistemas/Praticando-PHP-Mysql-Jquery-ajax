<div class="col-md-12 d-flex justify-content-center"
>
<form action="validador.php?acao=cadastro" method="POST" style="padding-top: 90px;">
	<h5 class="text-center text-white pb-2">Registrar-se</h5>
	<input class="form-control" type="text" name="usuario" placeholder="Úsuario" required>
	<input class="form-control mt-3" type="text" name="senha" placeholder="Senha" required>
	<button type="submit" class="btn btn-success mt-4">Cadastrar</button>
	<?php if(isset($_GET['erro'])){ ?>
	<h6>Preencha os dados corretamente</h6>
	<?php } ?>
</form>
</div>