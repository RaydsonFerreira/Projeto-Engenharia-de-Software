<html>
	<head>
		<meta charset="utf-8">
		<title>Mechanic Helper</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/estilo.css">

	</head>
	<body>
	
		<header>
			<div class="container">
				<img id="logotipo" src="img/mechanic-logo.png" alt="Logotipo">
			</div>

			<div class="container">
				
				<div class="row">
					
					<nav id="menu" class="pull-right">
						<ul>
                            <li><a href="../index.html">Home</a></li>
							<li><a href="sobre.php">Sobre</a></li>
							<li class="search">
								<div class="input-group">
							      <input type="search" placeholder="search">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>
						</ul>
					</nav>

				</div>

			</div>
        </header>
		<section>
			<h1>Mechanic Helper</h1>
			<p><b>Bem vindo!</b><br><br> Faça seu cadastro para agendar um serviço ou pedir um orçamento,
				é fácil e rápido, clique em cadastrar abaixo.<br> 
				Se você já é nosso cliente e pussui um cadastro, é só entrar com seu login e senha.
			</p>
			<form action="../control/login_Cliente.php" method="GET">
				<input type="text" name="nome" class="form-control input-group" placeholder="username">
				<input type="password" name="senha" class="form-control input-group" placeholder="senha">

				<div class="row row-max-400">
						
					<div class="col-xs-6">
						<button type="submit" class="btn btn-amarelo">Entrar</button>
					</div>
					<div class="col-xs-6">
						<a href="cadastroCliente.php" class="btn btn-amarelo">Cadastrar</a>
					</div>

				</div>
			</form>
		</section>
		<footer>
			
			<div class="row row-yellow-claro">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-2 text-center">
							
							<img class="logotipo" src="img/mechanic-logo.png" alt="Logotipo">

						</div>
						<div class="col-md-10">

						</div>

					</div>

				</div>

			</div>

			<div class="row row-yellow-escuro">
				
				<div class="container">
					
					<p class="pull-left">Copyright © Mechanic Helper 2018. Todos os direitos reservados.</p>
					<p class="pull-right text-roxo">Created by Rafaela, Raydson e Vinícius</p>

				</div>

			</div>

		</footer>

		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>