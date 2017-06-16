<!--
	#arquivo: 			logout.php
	#conteudo: 			Responsavel por fazer o logoout no PHP.
	#autor:				Vitor de Godeiro Marques
	#data modificação: 	12/04/2016
  -->
<?php 
	include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
	protegePagina(); // Chama a função que protege a página

	unset($_SESSION['usuarioNome']);
	header("location:login.php");
?>
