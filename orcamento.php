<!DOCTYPE html> 
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Programação Web</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
</head>
<body>

	<h1 class="topo">ORÇAMENTO</h1><br>

	<div>
		<?php
		
		$data = $_POST["data"];
		$servico = $_POST["servico"];
		$aparelho = $_POST["aparelho"];
		$cliente = $_POST["cliente"];
		$opcao = $_POST["OPCAO"];
		$op = $_POST["OP"];
	
		echo "Data do orçamento: $data  <br><br>";
		echo "Aparelho para manutenção: $aparelho <br><br>";
		echo "Serviço a ser executado: $servico<br><br>";
		echo "Equipamento entregue com: $opcao  $op";
		echo "<br><br>Declaro estar ciente com os valores e informações acima descritos: <br>$cliente ";
		?>
		<br><br>

		<p>Assinatura___________________</p><br>
		<p>Data:__/__/__</p><br><br>
		<p>Ao assinar você concorda com todos os termos de serviço.</p><br>
		<br>
	</div>

</body>
</html>