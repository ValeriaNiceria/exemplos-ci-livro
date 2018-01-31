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
}