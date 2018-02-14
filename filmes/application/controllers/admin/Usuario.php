<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {

        if ($_POST) {

            $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[5]');

            $this->form_validation->set_error_delimiters('<p class="errors">', '</p>');

            if ($this->form_validation->run()) {

                $nome = $this->input->post('nome');
                $email = $this->input->post('email');
                $senha = $this->input->post('senha');

                $this->load->model('Usuarios_Model');

                $attributes = array(
                    'usuario_nome' => $nome,
                    'usuario_email' => $email,
                    'usuario_senha' => $senha
                );

                $tabela = 'usuarios';

                if ($this->Usuarios_Model->create($tabela, $attributes)) {

                    $data['message_success'] = 'Usuário cadastrado com sucesso!';

                } else {

                    $data['message_erro'] = 'Erro ao realizar o cadastro, tente novamente mais tarde!';

                }

            }
        }


    	$data['title'] = 'Cadastro de Usuário';
        $this->load->view('admin/cad_usuario', $data);
    }
}