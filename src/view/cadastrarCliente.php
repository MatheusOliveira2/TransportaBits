<!-- Interface com os campos necessários para cadastras veículos -->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Cadastrar</title>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container">
					<ul class="navbar-nav mr-auto">
						<a class="navbar-brand h1 mb-0" href="#"> <h3>Cadastrar Cliente</h3></a>
					</ul>
					<ul class="navbar-nav ml-auto">
						<a class="btn btn-primary minhaNavbar" href="../index.php" >VOLTAR</a>
					</ul>
				</div>
			</nav>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>TransportaBits</h1>
				<h2>Cadastrar Cliente</h2>
				<form action="../controller/C_cadastroVeiculo.php" method="POST">
					<h2>Cadastro de Cliente</h2>
					<div class="row d-flex justify-content-center mt-2">
						CNPJ: <input type="text" name="cnpj" /><br />
					</div>
					<div class="row d-flex justify-content-center mt-2">
						E-mail: <input type="text" name="email" /><br />
					</div>
					<div class="row d-flex justify-content-center mt-2">
					    	Endereço: <input type="text" name="endereco" /><br />
                    </div>  
                    <div class="row d-flex justify-content-center mt-2">
					    	Senha: <input type="password" name="senha" /><br />
					</div>  
					<br />
                    <button class="btn btn-dark" type = "submit"> Cadastrar </button>
				</form>
			</div>
		</div>
	</body>
</html>
