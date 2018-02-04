<?php

class ProdutosModel extends CI_Model {

    public function buscaProdutos()
    {
        $query = $this->db->get_where("produtos", array(
            "vendido" => false
        ));
        return $query->result();
    }

    public function salva($produto)
    {
        $this->db->insert("produtos", $produto);
        return true;
    }

    public function meus_produtos($id)
    {
        $this->db->where("usuario_id", $id);
        $query = $this->db->get("produtos");
        return $query->result();
    }

    public function busca($id)
    {
        return $this->db->get_where("produtos", array(
            "id" => $id
        ))->row_array();
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