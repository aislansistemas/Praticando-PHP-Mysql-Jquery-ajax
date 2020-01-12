<?php
	$conexao= new PDO('mysql:host=localhost;dbname=sistema_login', 'root', '');
	 //$query="insert into tb_usuarios(usuario,senha)
	 //values('aislan','1234')";
	 //$stmt=$conexao->query($query);
	$acao=isset($_GET['acao']) ? $_GET['acao'] :$acao;
	if($acao=='logar'){
		if($_POST['usuario']==null || $_POST['usuario']==null){
			header('Location: index.php?erro=vazio');
		}
		else{
		 	session_start();
			 $query="select * from tb_usuarios where usuario = :usuario and senha = :senha ";
			 $stmt=$conexao->prepare($query);
			 $stmt->bindValue(':usuario',$_POST['usuario']);
			 $stmt->bindValue(':senha',$_POST['senha']);
			 $stmt->execute();
			 $a=$stmt->fetch();
			 
			 if($_POST['usuario']==$a['usuario'] && $_POST['senha']==$a['senha']){
			 	$_SESSION['autenticado']='sim';
				header('Location: tela_listagem.php');
			 }else{
			 	header('Location: index.php?erro');
			 }	 
		}    
		
	 }else if($acao=='inserir'){
	 	if(($_POST['nome'])==null || $_POST['genero']==null || $_POST['classificacao']==null || $_POST['ano']==null){
	 		header('Location: tela_inicial.php?error');
	 	}else{
	 	$query="insert into filmes(nome,genero,classificacao,ano)
	 	values(:nome,:genero,:classificacao,:ano)";
	 	$stmt=$conexao->prepare($query);
	 	$stmt->bindValue(':nome',$_POST['nome']);
	 	$stmt->bindValue(':genero',$_POST['genero']);
	 	$stmt->bindValue(':classificacao',$_POST['classificacao']);
	 	$stmt->bindValue(':ano',$_POST['ano']);
	 	$stmt->execute();
	 	header('Location: tela_listagem.php');
	 	}
	 	
	 
	 }else if($acao=='listar'){
	 	$stmt=$conexao->prepare("select id,nome,genero,classificacao,ano
	 		from filmes ");
	 	$stmt->execute();
	 	$lista=$stmt->fetchAll(PDO::FETCH_OBJ);
	 }else if($acao=='atualizar'){
	 	$query="update filmes set nome= :nome, genero= :genero,
	 	classificacao= :classificacao, ano= :ano where id= :id";
	 	$stmt=$conexao->prepare($query);
	 	$stmt->bindValue(':nome',$_POST['nome']);
	 	$stmt->bindValue(':genero',$_POST['genero']);
	 	$stmt->bindValue(':classificacao',$_POST['classificacao']);
	 	$stmt->bindValue(':ano',$_POST['ano']);
	 	$stmt->bindValue(':id',$_POST['id']);
	 	$stmt->execute();
	 	header('Location: tela_listagem.php');
	 }else if($acao=='deletar'){
	 	$query="delete from filmes where id= :id";
	 	$stmt=$conexao->prepare($query);
	 	$stmt->bindValue(':id',$_GET['id']);
	 	$stmt->execute();
	 	header('Location: tela_listagem.php');
	 }else if($acao=='busca'){
	 	$query="select * from filmes where nome = :busca";
	 	$stmt=$conexao->prepare($query);
	 	$stmt->bindValue(':busca',$_POST['buscar']);
	 	$stmt->execute();
	 	$retorno=$stmt->fetchAll(PDO::FETCH_OBJ);
	 	echo json_encode($retorno);
	 }else if($acao=='cadastro'){
		 $query="insert into tb_usuarios(usuario,senha)
	 	 values(:usuario,:senha)";
	 	 $stmt=$conexao->prepare($query);
	 	 $stmt->bindValue(':usuario',$_POST['usuario']);
	 	 $stmt->bindValue(':senha',$_POST['senha']);
	 	 $stmt->execute();
	
	 	 header('Location: index.php?acao=criado');
	 }

?>