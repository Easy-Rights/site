<?php

	require_once('bd/bd.php');

	class Usuario{
	    
		var $id;
		var $nome;
		var $login;
		var $perfil;
		var $senha;
		var $documento;
		var $email;
		var $instituicao;
		
		public function __construct($id){
			$this->id = $id;
			if (is_null($id)){
				
				$this->login = '';
				$this->senha = '';
				$this->nome = '';
				$this->perfil = '';
				$this->instituicao = '';
				$this->email = '';
				$this->documento = '';
				return;
			}                        
$sql = <<<END
			SELECT * FROM usuarios WHERE id = '$id'
END;
			
			$t = BD_LeRegistros( $sql, BD_Usuario )[0];
			
			$this->login = $t['login'];
			$this->senha = $t['senha'];
			$this->nome = $t['nome'];
			$this->perfil = $t['perfil'];
			$this->instituicao = $t['instituicao'];
			$this->email = $t['email'];
			$this->documento = $t['documento'];
		} 
		
		public static function inserirUsuario($login, $senha, $nome, $instituicao, $email, $perfil, $documento){
		
$sql = <<<END
		INSERT INTO usuarios (login, senha, nome, instituicao, email, perfil, documento) 
		VALUES ('$login', '$senha', '$nome', '$instituicao', '$email', '$perfil', '$documento') 
END;
		return BD_ExecutaSQL_Insert($sql, BD_Usuario);
	}

	public static function editarUsuario($id, $login, $senha, $nome, $instituicao, $email, $perfil, $documento){
		
$sql = <<<END
		UPDATE usuarios
		SET login='$login', senha='$senha', nome='$nome', instituicao='$instituicao', email='$email', perfil='$perfil', documento='$documento'
		WHERE id='$id';
END;
		return BD_ExecutaSQL($sql, BD_Usuario);
	}	
		
	// retorna um array com todos os usuários cadastrados
	public static function usuarios(){
		return BD_LeRegistros("SELECT * FROM usuarios ORDER BY perfil ASC;", BD_Usuario);		
	}
		
	public static function removerUsuario($id){
		return BD_ExecutaSQL("DELETE FROM usuarios WHERE id = '$id';", BD_Usuario);
	}		
	
	}
	 
	
?>