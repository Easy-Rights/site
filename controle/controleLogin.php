<?php
$login = $_POST["login"];
$senha = $_POST["password"];
$auth = FALSE;

$users=fopen("../users.txt","r") or die("unable to open file!");
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
	$_SESSION["erro"] = false;
	//echo $login;
	echo "Usuário logado com sucesso.";
	//header( sprintf( 'refresh: %u; url = "%s"', 3, "index.php" ) );
	//exit;
}
else{
	$_SESSION["erro"] = true;
	echo " Usuário ou senha inválida, tente novamente. Caso não tenha cadastro <a href='administrator/cadastro.php'> clique aqui </a> para realizar o cadastro.";
	//header( sprintf( 'refresh: %u; url = "%s"', 3, "login.php" ) );
	//exit;
}

?>