<?php
class Database {
	protected static $db;
	private function __construct() {
		$db_host = "chernobyl";
		$db_nome = "sgau_projeto";
		$db_usuario = "paolo";
		$db_senha = "@12#$*&&*ragnarok#@!!@#*&";
		$db_driver = "mysql";

		//Criando Conexão
		try {
			self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$db->exec('SET NAMES utf8');

			//Exibindo Menssagem de erro
		} catch (PDOException $e) {
			mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
			die("Connection Error: " . $e->getMessage());
		}
	}

	public static function conexao() {
		if (!self::$db) {
			new Database();
		}
		return self::$db;
	}
}    
          
function EntrarCidadao($cpf, $email, $senha, &$total) {
	$pdo = Database::conexao();
	$con = $pdo->prepare("SELECT * FROM cidadao WHERE  email = :EMAIL and senha = md5(:SENHA) OR cpf = :CPF AND senha = md5(:SENHA)");
	#$con->bindValue(":CPF", $cpf, PDO::PARAM_STR);
	$con->bindValue(":EMAIL", $email, PDO::PARAM_STR);
	$con->bindValue(":SENHA", $senha, PDO::PARAM_STR);
	$con->bindValue(":CPF", $cpf, PDO::PARAM_STR);
	$con->execute();
	$total = $con->rowCount();
	$r_con = $con->fetchAll(PDO::FETCH_OBJ);
	return $r_con;
}
function EntarColaborador($email, $senha, &$admin) {
	$pdo = Database::conexao();
	$conex = $pdo->prepare("SELECT * FROM colaborador WHERE  email = :EMAIL and senha = md5(:SENHA)");
	$conex->bindValue(":EMAIL", $email, PDO::PARAM_STR);
	$conex->bindValue(":SENHA", $senha, PDO::PARAM_STR);
	$conex->execute();
	$admin = $conex->rowCount();
	$r_conex = $conex->fetchAll(PDO::FETCH_OBJ);
	return $r_conex;
}
function CadastrarCidadao($nomeCadastro, $sobrenomeCadastro, $cpfCadastro, $telefoneCadastro, $emailCadastro, $senhaCadastro) {
	$pdo = Database::conexao();
	$i = $pdo->prepare("INSERT INTO cidadao VALUES (null, :NOME, :SOBRENOME, :CPF, :TELEFONE, :EMAIL, :SENHA)");
	$i->bindValue(":NOME", $nomeCadastro, PDO::PARAM_STR);
	$i->bindValue(":SOBRENOME", $sobrenomeCadastro, PDO::PARAM_STR);
	$i->bindValue(":CPF", $cpfCadastro, PDO::PARAM_INT);
	$i->bindValue(":TELEFONE", $telefoneCadastro, PDO::PARAM_INT);
	$i->bindValue(":EMAIL", $emailCadastro, PDO::PARAM_STR);
	$i->bindValue(":SENHA", $senhaCadastro, PDO::PARAM_STR);
	$i->execute();
}

?>