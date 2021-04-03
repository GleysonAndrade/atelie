<?php

class Categoria extends Conexao{

    private $cate_id, $cate_nome, $cate_descricao, $cate_slug;

    function __construct()
    {
        parent::__construct();
    }

    function GetCategoria(){
        //Buscar categoria
        $query = "SELECT * FROM {$this->prefix}categoria";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'cate_id' => $lista['cate_id'],
            'cate_nome' => $lista['cate_nome'],
            'cate_descricao' => $lista['cate_descricao'],
            'cate_slug' => $lista['cate_slug'],
            'cate_link'  => Rotas::pag_Produto(). '/' .$lista['cate_id'] . '/' . $lista['cate_slug'], 
        );

        $i++;
       endwhile;
    }
}
?>