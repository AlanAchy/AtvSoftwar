<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">

	<form action="cadastrado.php" method="post">
		
		<h2>Cadastro de Usuário</h2>

		<p>
			<label>Nome de Usuário:</label><br>
			<input type="text" name="nome">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha">
		</p>

		<p>
			<label>Email:</label><br>
			<input type="Email" name="email">
		</p>
		<p>
			<label>Data de nascimento:</label><br>
			<input type="date" name="data">
		</p>
		<p>
			<label>Cidade:</label><br>
			<input type="text" name="cidade">
		</p>
		<p>
			<label>UF:</label><br>
			<select name="uf">
				<option>PR</option>
				<option>SP</option>
				<option>RJ</option>
				<option>RS</option>
				<option>SC</option>
				<option>MG</option>
				<option>DF</option>
				<option>GO</option>
				<option>BA</option>
			</select>
		</p>
		<p>
			<label>Observação:</label><br>
			<textarea type="text" name="obs" rows="5" cols="50"></textarea><br>
		</p>
		<p>
			<input type="checkbox" name="ativo">Ativo<br>
			<input type="checkbox" name="ativo">Não ativo<br>
		</p>

		<button type="submit" class="btn btn-success">Salvar</button>

	</form>

</body>
</html>