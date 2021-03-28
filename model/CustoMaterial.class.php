<?php 
class CustoMaterial extends Conexao{
    private $cm_id, $cm_pro_id, $cm_descricao, $cm_metragem_total, $cm_metragem_usada, $cm_valor_total_fita, $cm_total_usado;

    function __construct()
    {
        parent::__construct();
    }

    function GetCustoMaterial(){
        $query = "SELECT * FROM {$this->prefix}custo_material";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cm_id' => $lista['cm_id'],
                'pro_id' => $lista['pro_id'],
                'cm_descricao' => $lista['cm_descricao'],
                'cm_metragem_total' => $lista['cm_metrage_total'],
                'cm_metragem_usada' => $lista['cm_metragem_usada'],
                'cm_valor_total_fita' => $lista['cm_valor_total_fita'],
                'cm_valor_usado' => $lista['cm_valor_usado']
            );
        $i++;
        endwhile;
    }

    function Preparar($cm_descricao, $cm_metragem_total, $cm_metragem_usada, $cm_valor_total_fita, $cm_total_usado, $cm_pro){
        $this->setCm_descicao($cm_descricao);
        $this->setCm_metragem_total($cm_metragem_total);
        $this->setCm_metragem_usada($cm_metragem_usada);
        $this->setPro_modelo($pro_modelo);
        $this->setCm_valor_total_fita($cm_valor_total_fita);
        $this->setCm_total_usado($cm_total_usado);
        $this->setPro_estoque($pro_estoque);
        $this->setCm_pro($cm_pro);
    }

    function Inserir(){
        $query = "INSERT INTO {$this->prefix}custo_material ()"
    }
}
?>