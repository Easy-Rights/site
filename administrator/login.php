<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login EasyRights</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="../css/jumbotron-narrow.css" rel="stylesheet">

		<script src="../js/jquery-1.11.2.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	</head>
	<body>

		<header>
			<?php
	       		include 'menuLogin.php';
	    	?> 
	 	</header>
		
		<article >
			<header style="text-align:center; padding-top: 15px;">
		    	<font style="font-size: 18px; "> 	Seja bem-vindo ao Sistema de Gerenciamento do EasyRights </font>
	  		</header>
	  		<div class="wrapper" style="max-width: 330px; margin: 0 auto; padding-top: 15px;">
				<form method="post" action="valida.php">
					Login<br>
					<input type="text" name="usuario"  class="form-control" autofocus>
					Senha<br>
					<input type="password" name="senha" class="form-control" >
					<br><br>
					<input type="submit" value="Entrar" class="btn btn-md btn-primary" />
					<button type="submit" class="btn btn-default" formaction="../index.php" >Cancelar</button>
				</form> 
			</div>
		</article>	

		<footer>
			<br>
			<?php
	       		include 'rodape.php';
	    	?> 
		</footer>

	</body>
</html>
