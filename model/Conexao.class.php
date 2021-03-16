<?php
class Conexao extends Config{
    private $host, $user, $senha, $banco;

    protected $obj, $itens=array(), $prefix;

    function __construct()
    {
        $this->host = self::DB_HOST;
        $this->user = self::DB_USER;
        $this->senha = self::DB_SENHA;
        $this->banco = self::DB_BANCO;
        $this->prefix = self::DB_PREFIX;

        try {
			if($this->Conectar() == null){
				$this->Conectar();
			}

		} catch (Exception $e) {
			exit($e->getMessage().'<h2> Erro ao conectar com o banco de dados! </h2>');
		}
	}

    private function Conectar(){
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
			);
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco}" , 
			$this->user, $this->senha, $options);
		return $link;
	}

    function ExecuteSQL($query, array $params = NULL){
		$this->obj = $this->Conectar()->prepare($query);
        return $this->obj->execute();
    }

    function ListarDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function TotalDados(){
        return $this->obj->rowCount();
    }

    function GetItens(){
        return $this->itens;
    }
}
?>