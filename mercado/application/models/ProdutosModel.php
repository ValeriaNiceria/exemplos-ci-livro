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

}