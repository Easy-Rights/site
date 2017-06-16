<?php

define ( 'BD_Usuario', 'petsrn2016' );


function BD_AbreConexao($database) {
	$result_id = mysqli_connect( "localhost", "root", "", $database);
	//mysql_select_db ( $database, $result_id );
	
	if ($result_id)
		return $result_id;
	else
		die ( "Não foi possível abrir a base de dados" );
}

function BD_FechaConexao($mysql_connection) {
	if ($mysql_connection)
		mysqli_close ( $mysql_connection );
}

function BD_LeRegistros($sql_statement, $database) {
	$mysql_connection = BD_AbreConexao ( $database );
	
	$result_id = mysqli_query ( $mysql_connection, $sql_statement);
	
	$table = array ();
	if ($result_id) {
		while ( $row = mysqli_fetch_assoc ( $result_id ) ) {
			$table [] = $row;
		}
	}
	
	BD_FechaConexao ( $mysql_connection );
	return $table;
}

/* Recebe como parâmetro uma conexão que deve ter sido aberta anteriormente e deve ser fechada depois de terminar a recursão */
function BD_LeRegistrosRecursivamente($sql_statement, $mysql_connection) {
	$result_id = mysqli_query ( $mysql_connection, $sql_statement);

	$table = array ();
	if ($result_id) {
		while ( $row = mysql_fetch_assoc ( $result_id ) ) {
			$table [] = $row;
		}
	}
	return $table;
}

/* Recebe como parâmetro uma conexão que deve ter sido aberta anteriormente e deve ser fechada depois de terminar a recursão */
function BD_InsereRegistrosRecursivamente($sql_statement, $mysql_connection) {
	$result_id = mysqli_query ( $mysql_connection, $sql_statement);
	return $result_id;
}

function BD_ExecutaSQL($sql_statement, $database) {
	$mysql_connection = BD_AbreConexao ( $database );
	$result_id = mysqli_query ( $mysql_connection, $sql_statement);
	BD_FechaConexao ( $mysql_connection );
	return $result_id;
}

function BD_ExecutaSQLRecursivamente($sql_statement, $mysql_connection) {
	$result_id = mysqli_query ( $mysql_connection, $sql_statement);
	return $result_id;
}

function BD_ExecutaSQL_Insert($sql_statement, $database) {
	$mysql_connection = BD_AbreConexao ( $database );
	mysqli_query ( $mysql_connection, $sql_statement);
	$new_id = mysqli_insert_id ($mysql_connection);
	BD_FechaConexao ( $mysql_connection );
	return $new_id;
}

function BD_ExecutaSQL_InsertRecursivamente($sql_statement, $mysql_connection) {
	mysqli_query ( $mysql_connection, $sql_statement);
	$new_id = mysqli_insert_id ($mysql_connection);
	return $new_id;
}

function BD_Update_Or_Insert($sql_update_statement, $sql_insert_statement, $database) {
	$mysql_connection = BD_AbreConexao ( $database );
	$result_id = mysqli_query ( $mysql_connection, $sql_update_statement);
	
	// var_dump(mysql_info());
	// echo "<br/>";
	if (($result_id == TRUE) && (strstr ( mysql_info (), "Rows matched: 0" ))) {
		mysql_query ( $sql_insert_statement );
	}
	
	BD_FechaConexao ( $mysql_connection );
	return $result_id;
}

function BD_Update_Or_Insert_Recursivamente($sql_update_statement, $sql_insert_statement, $conexao) {
	$result_id = mysql_query ( $sql_update_statement, $conexao );

	if (($result_id == TRUE) && (strstr ( mysql_info (), "Rows matched: 0" ))) {
		mysql_query ( $sql_insert_statement, $conexao );
		return mysql_insert_id ();
	}
	
	return $result_id;
}

function existeValor($valor, $arrays){
	foreach ($arrays as $array)
	{
		if ($array['id'] == $valor) return true;
	}
	return false;
}

function existeObjeto($valor, $objetos){
	foreach ($objetos as $objeto)
	{
		if ($objeto->id == $valor) return true;
	}
	return false;
}

?>
