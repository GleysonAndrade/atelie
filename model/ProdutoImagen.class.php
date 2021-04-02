<?php
class ProdutoImagen extends Conexao{
    function GetImagePRO($pro){

        $query = "SELECT * FROM {$this->prefix}imagen WHERE img_pro_id = :pro";

        $params = array(':pro'=>(int)$pro);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();
    }

    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'img_id' => $lista['img_id'],
            'img_nome' => Rotas::ImageLink($lista['pro_img'], 180, 180),
            'img_pro_id' => $lista['img_pro_id'],
            'img_link' => Rotas::ImageLink($lista['pro_img'], 500, 500),
            'img_arquivo' => $lista['img_nome'],
        );

        $i++;
       endwhile;
    }
}
?>