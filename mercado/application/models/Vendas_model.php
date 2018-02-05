<?php 

class Vendas_model extends CI_Model {

    public function salva($venda)
    {
        $this->db->insert("vendas", $venda);
        $this->db->update("produtos", array(
            "vendido" => 1
        ),
        array(
            "id" => $venda["produto_id"]
        ));
    }

    public function busca_vendidos($usuario) 
    {
        $id = $usuario["id"];

        $this->db->select("produtos.*, vendas.data_de_entrega");

        $this->db->from("produtos");
        $this->db->join("vendas", "vendas.produto_id = produtos.id");

        $this->db->where(array(
            "vendido" => true,
            "usuario_id" => $id
        ));

        return $this->db->get()->result();
    }
}