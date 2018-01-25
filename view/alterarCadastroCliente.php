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
			<h1>Alterar Cadastro de Clientes</h1>
			<form action="" method="GET">
				<div class="label-dados">
					<p class="nome-dados">Nome  </p>
					<input type="text" id="nome" name="nome" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">CNPJ/CPF  </p>
					<input type="text" id="cadastro" name="Cadastro" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">E-mail  </p>
					<input type="email" id="email" name="email" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">Cidade  </p>
					<input type="text" id="cidade" name="cidade" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">Estado  </p>
					<input type="text" id="estado" name="estado" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">Endereço  </p>
					<input type="text" id="endereco" name="endereco" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">Username  </p>
					<input type="text" id="username" name="username" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">Senha  </p>
					<input type="password" id="senha" name="senha" class="form-control input-dados">
				</div>
				<div class="label-dados">
					<p class="nome-dados">Confirme a Senha  </p>
					<input type="password" id="csenha" name="csenha" class="form-control input-dados">
				</div>
				<span class="input-group-btn">
					<button class="btn btn-default btn-amarelo btn-cadastro" type="button">Alterar</button>
				</span>
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