<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">

	<?php  

	if(empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['email']) || empty($_POST['data']) || empty($_POST['cidade']) || empty($_POST['uf']) || empty($_POST['obs']) || empty($_POST['ativo']))
	{

		echo '<h2 class="alert alert-warning">ATENÇÃO: Preencha todo o formulário de cadastro</h2>';

	}
	else
	{
		$nome	= $_POST['nome'];
		$senha	= $_POST['senha'];
		$email	= $_POST['email'];
		$data	= $_POST['data'];
		$cidade	= $_POST['cidade'];
		$uf		= $_POST['uf'];
		$obs	= $_POST['obs'];
		$ativo	= $_POST['ativo'];

		// incluir arquivo de conexão
		include 'conn.php';

		// criar o comando SQL para inserir os dados na tabela tb_contatos
		$sql = "INSERT INTO tb_user (nome, email, senha, datanasci, cidade, uf, observacao, ativo)
		 		VALUES ('$nome', '$email', '$senha', '$data', '$cidade','$uf', '$obs', '$ativo')";

		// executar comando sql
		$result = mysqli_query($conn, $sql);

		// recebe o número de linhas afetadas na tabela pelo comando sql executado
		$linhas = mysqli_affected_rows($conn);

		// verificar valor de $linhas:
		if($linhas > 0)
		{
			echo '<h3 class="alert alert-success">Cadastrado com sucesso!</h3>';
			include 'menu.php';
		}
		else
		{
			echo '<h3 class="alert alert-danger">Erro ao cadastrar. Tente novamente ou contate o suporte</h3>';
		}


	}



	?>

</body>
</html>