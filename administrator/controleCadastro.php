<?php
$login = $_POST["login"];
$senha = $_POST["password"];
$users = fopen("../users.txt","a+") or die("não foi possível abrir o arquivo");
$myObj = array('nome' => $login, 'senha' => $senha);
$myJSON = json_encode($myObj);
fwrite($users, $myJSON);
fwrite($users, "\n");
fclose($users);
echo " Usuário $login criado com sucesso.";
header( sprintf( 'refresh: %u; url = "%s"', 3, "index.php" ) );
exit;
?>