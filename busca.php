<<!DOCTYPE html>
<html>
<head>
	<title>busca</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<style type="text/css">
		.a{
			background: #C1CDCD;
		}
		.b{
			background: #B0E2FF;
		}
	</style>
</head>
<body>
	<div class="conteiner-fluid pt-5">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
			<h2 class="text-primary text-center pb-5">Tela de pesquisa</h2>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			
			<div class="col-md-8 d-flex justify-content-center a">
				<form> 
					<input id="pesse" class="form-control" type="text"  placeholder="Pesquisar..." name="buscar">
					<button type="submit" class="btn btn-default-light mt-4">
						Buscar
					</button>
				</form>
			</div>
		</div>

		<div class="row pt-5 d-flex justify-content-center">
			<div class="col-md-8 d-flex justify-content-center a" style="height: 400px;">
				
				<h5 class="pr-4" id="resultado"> </h5>
				<h5 class="pr-4" id="resultado2"> </h5>
				<h5 class="pr-4" id="resultado3"> </h5>
				<h5 class="pr-4" id="resultado4"> </h5>
			</div>
		</div>

	</div>
	<script>

		$(document).ready(() => {

			//busca por evento de teclado
				$('#pesse').keyup((e) => {	
					e.preventDefault()
			//	console.log(e)
					let dadoform = $('form').serialize()

					//console.log(dadoform.buscar)
			
					//ajax
					$.ajax({
						type: 'POST',
						url: 'busca_banco.php',
						data: dadoform, //x-www-form-urlencoded
						dataType: 'json',
						success: dados => { 
							$('#resultado').html(dados[0].nome)
							$('#resultado2').html(dados[0].genero)
							$('#resultado3').html(dados[0].classificacao)
							$('#resultado4').html(dados[0].ano)
						},
						error: erro => { console.log(erro) }
					})
			})


				$('button').on('click',(e) => {	
					e.preventDefault()
			//	console.log(e)
					let dadoform = $('form').serialize()

					//console.log(dadoform.buscar)
			
					//ajax
					$.ajax({
						type: 'POST',
						url: 'busca_banco.php',
						data: dadoform, //x-www-form-urlencoded
						dataType: 'json',
						success: dados => { 
							$('#resultado').html(dados[0].nome)
							$('#resultado2').html(dados[0].genero)
							$('#resultado3').html(dados[0].classificacao)
							$('#resultado4').html(dados[0].ano)
						},
						error: erro => { console.log(erro) }
					})
			})

			}) 
	</script>
</body>
</html>