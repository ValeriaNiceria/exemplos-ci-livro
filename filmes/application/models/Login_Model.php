<?php

class Login_Model extends CI_Model {

    public function login($tabela, $email, $senha) {
    	$this->db->where('usuario_email', $email);
    	$this->db->where('usuario_senha', $senha);
    	$query = $this->db->get($tabela)->row();
    	return $query;
        
    }
}