<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exibir Usuários</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
<?php 
	include 'conn.php';
	$sql  = "SELECT * FROM tb_user";
	$result  = mysqli_query($conn, $sql);
	$linhas = mysqli_affected_rows($conn);
if ($linhas > 0) 
		{
			echo "<h3>Usuários Cadastrados:</h3>";
			$registros= array();
			while ($registros = mysqli_fetch_assoc($result))
			{
				echo "<p>";
				foreach ($registros as $indice => $valor) 
				{
					echo "$indice:$valor<br>";
				}
	
			echo "</p>";
			}	
		}
else
	{
		echo "<h3>Não há Usuários</h3>";
	}
