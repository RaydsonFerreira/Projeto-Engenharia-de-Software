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
			<h1>Vendas</h1>
			<form action="../control/buscar_orçamento.php" method="GET">
				<div class="row row-max-400">
					<div class="col-lg-12">
						<div class="input-group">
							<input type="text" name="numero" class="form-control input-text" placeholder="Número do Orçamento">
							<span class="input-group-btn">
							<button class="btn btn-default btn-amarelo" type="submmit">Buscar</button>
							</span>
						</div>
					</div>
				</div>
			</form>
			<div class="btn-acoes">
				<span class="input-group-btn btn-vendas">
					<button class="btn btn-default btn-amarelo" type="button">Visualizar</button>
				</span>
				<span class="input-group-btn btn-vendas">
					<button class="btn btn-default btn-amarelo" type="button">Imprimir</button>
				</span>
				<span class="input-group-btn btn-vendas">
					<button class="btn btn-default btn-amarelo" type="button">Finalizar Venda</button>
				</span>
			</div>

			<div class="row row-btn-clientes row-max-400">
				
				<a href="cadastroCliente.php" class="btn btn-amarelo btn-clientes">Cadastrar Cliente</a><br>
				<a href="buscarCliente.php" class="btn btn-amarelo btn-clientes">Buscar Cliente</a>
			
			</div>

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