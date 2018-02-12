<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {

        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[5]');

        if ($this->form_validation->run()) {
            /*Pegar os dados do form*/
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');

            $tabela = 'usuarios';

            $this->load->model('Login_Model');
            $dadosLogin = $this->Login_Model->login($tabela, $email, $senha);

            if (count($dadosLogin) == 1) {

                $dadosAdmin = array(
                    'logado' => TRUE,
                    'nome_admin' => $dadosLogin->usuario_nome
                );

                $this->session->set_userdata($dadosAdmin);
                redirect('admin/painel');

            } else {

                $data['erro'] = 'Usuário ou senha inválidos!';
            }

        } else {
            $data['erro'] = validation_errors();
        }

        $data['title'] = "Acesso ao sistema";
        $this->load->view("admin/login", $data);
    }
}