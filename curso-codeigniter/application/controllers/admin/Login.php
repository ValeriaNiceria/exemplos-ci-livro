<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title'] = "Acesso ao sistema";

        $this->form_validation->set_rules('usuario', 'Usuário', 'trim|required');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required');

        if ($this->form_validation->run()) {

        } else {
            $data['erro'] = validation_errors();
        }

        $this->load->view("admin/login", $data);
    }
}