<?php

class ProdutosModel extends CI_Model {

    public function buscaProdutos()
    {
        $query = $this->db->get("produtos");
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
}