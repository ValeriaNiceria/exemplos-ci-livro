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

    public function findById($tabela, $where)
    {
        if (!is_array($where)) {
            trigger_error('O parametro passado no método ' . __FUNCTION__ . ' precisa ser um array. ');
            die();
        }
        $this->db->where($where[0], $where[1]);
        $query = $this->db->get($tabela);
        return $query->row_array();
    }

    public function update($tabela, $where, $attributes)
    {
        if (!is_array($where)) {
            trigger_error('O parametro passado no método ' .__FUNCTION__. ' precisa ser um array.');
            die();
        }
        $this->db->where($where[0], $where[1]);
        $this->db->update($tabela, $attributes);
    }

    public function delete($tabela, $where)
    {
        if (!is_array($where)) {
            trigger_error('O parametro passado no método '.__FUNCTION__. ' precisa ser um array.');
            die();
        }
        $this->db->where($where[0], $where[1]);
        $this->db->delete($tabela);
    }

    public function create($tabela, $attributes)
    {
        if (!is_array($attributes)) {
            trigger_error('O parametro passado no método '.__FUNCTION__. ' precisa ser um array.');
            die();
        }elseif ($this->db->insert($tabela, $attributes)) {
            return true;
        }
        return false;
    }
}