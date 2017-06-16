<?php
if(session_status() != PHP_SESSION_ACTIVE) session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if($_REQUEST['action'] == "cadastrarUsuario"){
		$login = $_REQUEST["login"];
		$senha = $_REQUEST["senha"];
		$senhaConfirmacao = $_REQUEST["senhaConfirmar"];
		
		if($senha != $senhaConfirmacao){
			
			$_SESSION['alert'] = "<h3>Senhas diferentes, por favor realize novamente o cadastro.</h3>";
			header("Location: administrator/cadastro.php");
			exit;
		}
		else{
			$users = fopen("../users.txt","a+") or die("não foi possível abrir o arquivo");
			$myObj = array('nome' => $login, 'senha' => $senha);
			$myJSON = json_encode($myObj);
			fwrite($users, $myJSON);
			fwrite($users, "\n");
			fclose($users);
			echo "<h3> Usuário $login criado com sucesso. Aguarde o redirecionamento. </h3>";
			header( sprintf( 'refresh: %u; url = "%s"', 3, "index.php" ) );
			exit;
		}
	}
	
	
	if($_REQUEST['action'] == "efetuarLogin"){
		$login = $_REQUEST["login"];
		$senha = $_REQUEST["senha"];
		$auth = FALSE;
		
		$users=fopen("users.txt","r") or die("unable to open file!");
		while(!feof($users) and !$auth) {
			$usersline = json_decode(fgets($users));
			if($usersline != ""){
				$getuser = $usersline->{'nome'};
				$getpass = $usersline->{'senha'};
			
				if (($login== $getuser) && ($senha== $getpass)) {
					$auth = TRUE;
				}
			}
		} //end while
		if ($auth) {
			$_SESSION["user"] = $login;
			//echo $login;
			echo "<h3> Usuário $login logado com sucesso. Aguarde o redirecionamento. </h3>";
			header( sprintf( 'refresh: %u; url = "%s"', 3, "user/index.html" ) );
			exit;
		}
		else{
			echo "<h3> Usuário ou senha inválida, tente novamente. Aguarde o redirecionamento. </h3>";
			header( sprintf( 'refresh: %u; url = "%s"', 3, "login.php" ) );
			exit;
		}
		
		
		//echo $login;
		
	}
	
}

?>