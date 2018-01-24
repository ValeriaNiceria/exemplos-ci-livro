<?php

class Filmes extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    public function listar_filmes() {
        //$sql = "SELECT * FROM filmes";
        //$this->db->select('filme_nome', 'filme_preco');
        //$this->db->select()->from("filmes");
        //$this->db->select()->from('filmes')->where('id', 1);   
        //$this->db->select()->from("filmes")->limit(2);
        //$this->db->select()->from("filmes")->join('lancamentos', 'filmes.id = lancamentos.filmes');             
        $query = $this->db->get("filmes");
        //return $query->row(); //Retorna somente um valor
        return $query->result();
    }

    public function cadastrar_filme($attributes) {
        //$sql = "INSERT INTO filmes () VALUES ()";
        $this->db->insert('filmes', $attributes);
    }

    public function atualizar_filme($id, $attributes) {
        $this->db->where('id', $id);
        $this->db->update('filmes', $attributes);
    }
}