<?php

class UsuariosModel extends CI_Model {

    public function salva($usuario)
    {
        $this->db->insert('usuarios', $usuario);
        return true;
    }

    public function buscaUsuarios() 
    {
        $query = $this->db->get("usuarios");
        return $query->result();
    }

    public function buscaPorEmailSenha($email, $senha)
    {
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;

    }
}