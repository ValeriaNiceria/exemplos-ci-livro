<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll($tabela) 
    {
        $query = $this->db->get($tabela);
        return $query->result();
    }

    public function findPagination($tabela, $por_pagina, $inicio)
    {
        $this->db->limit($por_pagina, $inicio); 
        $query = $this->db->get($tabela);            
        return $query->result();
    }

    public function num_rows($tabela)
    {
        $query = $this->db->get($tabela);
        return $query->num_rows();
    }

    public function findById()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}