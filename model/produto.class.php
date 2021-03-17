<?php
class Produto extends Conexao{
    function __construct()
    {
        parent::__construct();
    }

    function GetProdutos(){
        //Buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produto p INNER
        JOIN {$this->prefix}categoria c ON p.pro_categoria
        = c.cate_id";

        $query .= " ORDER BY pro_id DESC";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    function GetProdutoId($id){
        //Buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produto p INNER
        JOIN {$this->prefix}categoria c ON p.pro_categoria
        = c.cate_id";

        $query .= " AND pro_id = {$id}";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'pro_id' => $lista['pro_id'],
            'pro_nome' => $lista['pro_nome'],
            'pro_descricao' => $lista['pro_descricao'],
            'pro_peso' => $lista['pro_peso'],
            'pro_valor' => $lista['pro_valor'],
            'pro_altura' => $lista['pro_altura'],
            'pro_largura' => $lista['pro_largura'],
            'pro_comprimento' => $lista['pro_comprimento'],
            'pro_img' => $lista['pro_img'], 
            'pro_img' => $lista['pro_img'],  
	        'pro_img_g' => Rotas::ImageLink($lista['pro_img'], 500, 501) , 
	        'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 70, 70) , 
            'pro_slug' => $lista['pro_slug'],
            'pro_frete_free' => $lista['pro_frete_free'],
            'pro_ref' => $lista['pro_ref'],
            'cate_id' => $lista['cate_id'],
            'cate_nome' => $lista['cate_nome']
        );

        $i++;
       endwhile;
    }
}
?>