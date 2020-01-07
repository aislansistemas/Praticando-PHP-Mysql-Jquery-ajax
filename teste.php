<?php
	$acao='listar';
	require "validador.php";
	print_r($lista);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="teste.php" method="Get">
		<select name="teste" >
		<?php foreach($lista as $key => $valor){ ?>
			<option value="<?= $valor->id ?>">
				<?= $valor->nome ?>
			</option>
		<?php } ?>
		</select>
		<input type="submit" value="testar">
	</form>
</body>
</html>