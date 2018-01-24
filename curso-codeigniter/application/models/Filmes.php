<?php

class Filmes extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    public function listar_filmes() {
        //$sql = "SELECT * FROM filmes";
        $this->db->select();
        $query = $this->db->get("filmes");
        return $query->result();
    }


}