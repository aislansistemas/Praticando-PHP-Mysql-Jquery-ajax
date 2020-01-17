<?php
	session_start();
	if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado']!='sim'){
		header('Location: index.php');
	}
	$acao='listar';
	require "validador.php";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		body{
			background: url('img/party.jpg') no-repeat;
		}
		.a{
			background: rgba(20,20,20,0.6);
			border-radius: 12px;
			margin-top: 20px;
			box-shadow: 10px 20px 40px;
		}
		tr{
			transition: background 0.9s,color 0.9s;
		}
		tbody tr:hover{
			background: rgba(250,250,250,0.2);
			color: #C1CDCD;
			box-shadow: 4px 4px 4px #8B7500;
			transition-property: height 500px;
		}
		
	</style>
	<script type="text/javascript">
		function atualizar(id,nome,genero,classificacao,ano){
			let div=document.createElement('div')
			div.className="d-flex justify-content-center"
			div.style="position:absolute;background: rgba(20,20,20,0.6);width:50%;"

			let form=document.createElement('form')
			form.action="validador.php?acao=atualizar"
			form.method="Post"
			form.className="form-group row d-flex justify-content-center"
			form.style="width:40%;"
			let inputnome=document.createElement('input')
			inputnome.style='background: rgba(80,80,80,0.4);color:white;border-bottom-color: orange'
			inputnome.type="text"
			inputnome.name='nome'
			inputnome.className="form-control row mt-5"
			inputnome.value=nome

			let inputid=document.createElement('input')
			inputid.type='hidden'
			inputid.name='id'
			inputid.value=id

			let inputgenero=document.createElement('input')
			inputgenero.style='background: rgba(80,80,80,0.4);color:white;border-bottom-color: orange'
			inputgenero.type="text"
			inputgenero.name='genero'
			inputgenero.className="form-control mt-5"
			inputgenero.value=genero

			let inputclassificacao=document.createElement('input')
			inputclassificacao.style='background: rgba(80,80,80,0.4);color:white;border-bottom-color: orange'
			inputclassificacao.type="text"
			inputclassificacao.name='classificacao'
			inputclassificacao.className="form-control mt-5"
			inputclassificacao.value=classificacao

			let inputano=document.createElement('input')
			inputano.style='background: rgba(80,80,80,0.4);color:white;border-bottom-color: orange;'
			inputano.type="text"
			inputano.name='ano'
			inputano.className="form-control mt-5"
			inputano.value=ano

			
			let button=document.createElement('button')
			button.type='submit'
			button.className='mt-4 btn btn-success'
			button.innerHTML='atualizar'

			let link=document.createElement('a')
			link.href='tela_listagem.php'
			link.className='ml-5 mt-4 btn btn-danger'
			link.innerHTML='Cancelar'

			div.appendChild(form)
			form.appendChild(inputnome)
			form.appendChild(inputgenero)
			form.appendChild(inputclassificacao)
			form.appendChild(inputano)
			form.appendChild(inputid)
			form.appendChild(button)
			form.appendChild(link)

			document.getElementById('limpa').innerHTML=""
			let filmes=document.getElementById('aa')
	
			filmes.innerHTML=""
			filmes.insertBefore(div,filmes[0])	
		}
		function deletar(id){
			location.href='validador.php?acao=deletar&id='+id
		}

	</script>
</head>
<body>

	<div class="container">
		<div class="row">
			<a href="index.php"><button class="btn btn-default">Desconectar</button></a>
		</div>
	</div>

	<div class="display-3 text-light text-center pt-5">Lista de filmes</div>
	<div style="display: block" class="container pt-5">
		<a href="tela_inicial.php" class="btn btn-warning text-dark  "><span class="h5">Inserir filme</span></a>
	</div>	
	<div class="container a " id="aa">
		<div class="row" id="limpa">
		<table class="table gg">
			<thead id="f" class="h2 text-warning">
				<th>Nome</th>
				<th>Gênero</th>
				<th>Classificação</th>
				<th>Ano</th>
			</thead>
			<?php foreach($lista as $key => $filmes) {
			
			?>
			<div id="filmes_<?= $filmes->id ?>">
			</div>
			<tbody  id="letra" class="h3 text-light">
				<td id="b"><?= $filmes->nome ?></td>
				<td id="c"><?= $filmes->genero ?></td>
				<td id="d"><?= $filmes->classificacao ?></td>
				<td id="e"><?= $filmes->ano ?></td>
				<td>
					<button onclick="atualizar(<?= $filmes->id ?>,
					'<?= $filmes->nome ?>','<?= $filmes->genero ?>','<?= $filmes->classificacao ?>','<?= $filmes->ano ?>')" class="btn btn-primary">
						Editar
					</button> 
				</td>
				<td >
					<button class="btn btn-danger" onclick="deletar(<?= $filmes->id ?>)">
						Deletar
					</button>
				</td>
			</tbody>
		</div>
			
		<?php } ?>

		</table>

		</div>
	</div>
</html>