<?php
class Conexao extends Config{
    private $host, $user, $senha, $banco;

    protected $obj, $itens=array(), $prefix;

    public $paginacao_links, $totalpags, $limite, $inicio;

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

        if(count($params) > 0){
            foreach($params as $key =>$value){
                $this->obj->bindValue($key, $value);
            }
        }

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

    function PaginacaoLinks($campo, $tabela){
        $pag =  new Paginacao();
        $pag->GetPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;

        $this->totalpags = $pag->totalpags;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;

        if($this->totalpags > 0){
			return " limit {$inicio}, {$limite}";
		}else{
			return " ";
		}
    }

    protected function Paginacao($pagina=array()){
        $pag = '<ul class="pagination">';
        $pag .= '<li><a href="?p=1"> << </a></li>';

        foreach($pagina as $p):
            $pag .= '<li><a href="?p='.$p.'">'.$p.'</a></li>';
        endforeach;

        $pag .= '</ul>';
        return $pag;    
    }

    function ShowPaginacao(){
        return $this->Paginacao($this->paginacao_links);
    }
}
?>