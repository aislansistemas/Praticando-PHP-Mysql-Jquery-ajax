
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de login</title>
	<meta charset="utf-8">
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		
		.formu{
			display: block;
			margin: 0 auto;
			height: 300px;
			width: 350px;		
			background: rgba(250,250,250,0.2);
			border-radius: 8px;
		}	
		.interno{
			padding-top: 90px;
		}

	</style>
</head>
<body style="background: url('img/paris.jpg') no-repeat center;height:1000px">
	<div class="container-fluid">

	<header>
		<div>
	<nav class="navbar navbar-expand-md  ">
      	<div class="container">
        <a class="navbar-brand text-light" href="">Aislan Estudo</a>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#barranavegacao">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <a href="" class="btn btn-outline-light ml-5 mr-1">
     
          <i class="fab fa-facebook fa-2x"></i> </a>
        <a href="" class="btn btn-outline-light mr-1">
          <i class="fab fa-twitter-square fa-2x"></i>
        </a>
        <a href="" class="btn btn-outline-light mr-auto">
         <i class="fab fa-instagram fa-2x"></i>
        </a>
        
        <div class="collapse navbar-collapse ml-5" id="barranavegacao">
          <ul class="navbar-nav">
            <li class="nav-item active pr-1">
             <a class="nav-link text-light " href="#"><i class="fas fa-home mr-1"></i>Home</a>
            </li>
            <li class="nav-item pr-1">
             <a class="nav-link text-light " href="#">
              <i class="far fa-newspaper mr-1"></i>Sobre</a>
            </li>
            <li class="nav-item pr-1">
             <a class="nav-link text-light " href="#"><i class="fas fa-at mr-1"></i>contato</a>
            </li>
            <li class="nav-item pr-1">
             <a class="nav-link text-light " href="#">
              <i class="fas fa-info mr-1"></i>Sistema</a>
            </li>
          </ul>
        </div>
        </div>      
      </nav>
      </div>
	</header>
	<section>
		<div style="margin-top: 200px;background: url();" class="container ">
			<div class="row formu">	
				<div class="col-md-12 d-flex justify-content-center interno">
					
					<form method="Post" action="validador.php?acao=logar" class="form-group">
						<input class="form-control" type="text" name="usuario" placeholder="Usuario..."><br>
						<input class="form-control" type="password" name="senha" placeholder="Senha..." >
						<?php if(isset($_GET['erro'])) {?>

						<?php if($_GET['erro']==null){ ?>
						<span class="text-danger">email ou senha invalidos!</span><?php } ?>

						<?php if($_GET['erro']=='vazio'){ ?>
						<span class="text-danger">Preencha todos os campos</span><?php } ?>

						<?php } ?>
						<input class="btn btn-danger mt-3" type="submit" value="Logar">
					
					</form>
					
				</div>
			</div>
		</div>
	</section>

</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>