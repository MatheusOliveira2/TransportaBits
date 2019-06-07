<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<title>Cadastrar</title>
	</head>

	<body>
		<form action="../controller/C_cadastroVeiculo.php" method="POST">
			<h2>CADASTRO DE Veiculo</h2>
			Modelo: <input type="text" name="modelo" /><br />
			Placa: <input type="text" name="placa" /><br />
            Chassi: <input type="text" name="chassi" /><br />
            Cor: <input type="text" name="cor" /><br />
            Ano: <input type="text" name="ano" /><br />
			<input type="submit" name="salvar" />
			<input type="reset" name="limpar" /><br />
		</form>
		
		<br /><a href="sistema.html">VOLTAR</a>
	</body>
</html>