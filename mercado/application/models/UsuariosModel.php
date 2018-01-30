<?php

class UsuariosModel extends CI_Model {

    public function salva($usuario)
    {
        $this->db->insert('usuarios', $usuario);
    }
}