<?php
	session_start();
	if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado']!='sim'){
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		body{
			background: url('img/film.jpg') no-repeat center;
		}
		.forma{
			color: white;
			height: 550px;
			border-radius: 12px;
			width: 450px;
			padding-top: 90px;
			margin:100px auto;
			background: rgba(80,80,80,0.4);
		}
		
	</style>
</head>
<body>
	<div class="text-center">
		<h1 style="color: #8B4513" class="display-3">Inserir um novo filme</h1>
	</div>
	<div class="d-flex justify-content-center forma" >
		
		<div class="row">
		
		<form class="form-group" action="validador.php?acao=inserir" method="Post">
		Nome:<input style="background: rgba(20,20,20,0.3);color: #dedede" class="form-control" type="text" name="nome" ><br>
		Gênero:<input style="background: rgba(20,20,20,0.3);color: #dedede" class="form-control" type="text" name="genero" ><br>
		Classificação:<input  style="background: rgba(20,20,20,0.3);color: #dedede"class="form-control" type="text" name="classificacao" ><br>
		Ano:<input style="background: rgba(20,20,20,0.3);color: #dedede" class="form-control" type="text" name="ano" ><br>
		<input class="btn btn-success" type="submit" value="Inserir">
		<h5 class="text-danger text-center pt-3"><?php if(isset($_GET['error'])){
				echo "Existem campos não preenchidos";
			} ?></h5>
		</form>
	</div>
	</div>

</body>
</html>
