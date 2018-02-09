<?php

class Filmes extends MY_Model {

    function __construct() {
        parent:: __construct();
    }

    /*
    public function listar_filmes($por_pagina, $inicio) {
        //$sql = "SELECT * FROM filmes";
        //$this->db->select('filme_nome', 'filme_preco');
        //$this->db->select()->from('filmes')->where('id', 1);   
        //$this->db->select()->from("filmes")->limit(2);
        //$this->db->select()->from("filmes")->join('lancamentos', 'filmes.id = lancamentos.filmes');
        $this->db->select()->from("filmes")->limit($por_pagina, $inicio);             
        $query = $this->db->get();
        //return $query->row(); //Retorna somente um valor
        return $query->result();
    }
    */

    public function cadastrar_filme($attributes) {
        //$sql = "INSERT INTO filmes () VALUES ()";
        $this->db->insert('filmes', $attributes);
        return true;
    }

    public function atualizar_filme($id, $attributes) {
        $this->db->where('id', $id);
        $this->db->update('filmes', $attributes);
    }

    public function deletar_filme($id) {
        $this->db->where('id', $id);
        $this->db->delete('filmes');
    }

    public function buscar_filmes($filme_busca, $por_pagina, $inicio) {
        $this->db->like('filme_nome', $filme_busca)->limit($por_pagina, $inicio);
        return $this->db->get('filmes')->result();
    }

    public function get_total_filmes_busca($filme_busca) {
        $this->db->like('filme_nome', $filme_busca);
        $query = $this->db->get('filmes');
        return $query->num_rows();

    }
}