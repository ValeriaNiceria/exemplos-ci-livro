<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function cadastro() {
        $data['title'] = 'Cadastro de Usuário';

        $this->load->view('admin/cad_usuario', $data);
    }
}