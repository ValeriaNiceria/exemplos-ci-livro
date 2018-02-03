<?php

class ProdutosModel extends CI_Model {

    public function buscaProdutos()
    {
        $query = $this->db->get_where("produtos", array(
            "vendido" => 0
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
        $query = $this->db->get_where("produtos", array(
            "vendido" => 0
        ));
        return $query->result();
    }

    public function busca($id)
    {
        return $this->db->get_where("produtos", array(
            "id" => $id
        ))->row_array();
        
    }
}