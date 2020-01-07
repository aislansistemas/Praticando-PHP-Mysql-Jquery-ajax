<?php
	/*
	$conexao= new PDO('mysql:host=localhost;dbname=sistema_login', 'root', '');
		$query="select * from filmes where nome = :busca";
	 	$stmt=$conexao->prepare($query);
	 	$stmt->bindValue(':busca',$_GET['buscar']);
	 	$stmt->execute();
	 	$retorno=$stmt->fetchAll(PDO::FETCH_OBJ);
	 	echo json_encode($retorno);
	*/
	class Busca{
		public $busca;
		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo,$valor){
			$this->$atributo=$valor;
			return $this;
		}
	}	

	class Conexao{
		public function conectar(){
			try{
			$conexao= new PDO('mysql:host=localhost;dbname=sistema_login', 'root', '');
			return $conexao;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
	}
	class Retorno{
		public $busca;
		public $conexao;

		public function __construct(Busca $busca,Conexao $conexao){
			$this->busca=$busca;
			$this->conexao=$conexao->conectar();
		}
		public function retornaBusca(){
		$query="select * from filmes where nome = :busca";
	 	$stmt=$this->conexao->prepare($query);
	 	$stmt->bindValue(':busca',$this->busca->__get('busca'));
	 	$stmt->execute();
	 	return $retorno=$stmt->fetchAll(PDO::FETCH_OBJ);
	 	
		}
	}

	$conexao=new Conexao();
	$busca=new Busca();
	$busca->__set('busca',$_POST['buscar']);
	$retorno=new Retorno($busca,$conexao);
	$lista=$retorno->retornaBusca();
	echo json_encode($lista);
	
?>