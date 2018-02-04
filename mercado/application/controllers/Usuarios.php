<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public $dados = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("UsuariosModel");
    }

    public function lista() 
    {
        $this->dados['title'] = "Lista de Usuários";
        $this->dados['view'] = "usuarios/lista";

        $usuarios = $this->UsuariosModel->buscaUsuarios();
        $this->dados['usuarios'] = $usuarios;

        $this->load->view("index", $this->dados);
    }

    public function formulario_cadastro() 
    {
        $this->dados['title'] = "Cadastro de usuários";
        $this->dados['view'] = "usuarios/cadastro_usuario";

        $this->load->view("index", $this->dados);
    }

    public function novo()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("nome", "Nome", "trim|required|min_length[5]");
        $this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
        $this->form_validation->set_rules("senha", "Senha", "trim|required|min_length[6]");

        $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

        $sucesso = $this->form_validation->run();

        if ($sucesso) {
            $usuario = array(
                "nome" => $this->input->post("nome"),
                "email" => $this->input->post("email"),
                "senha" => md5($this->input->post("senha")) //senha criptografada
            );
            
            if ($this->UsuariosModel->salva($usuario)) 
            {
                //Redirecionando para lista de usuários
                $this->dados['title'] = "Lista Usuários";
                $this->dados['view'] = "usuarios/lista";
                $this->dados['aviso'] = "Usuário cadastrado com sucesso";

                $usuarios = $this->UsuariosModel->buscaUsuarios();
                $this->dados['usuarios'] = $usuarios;

                $this->load->view("index", $this->dados);
            }
        } else {
            $this->dados['title'] = "Cadastro de usuários";
            $this->dados['view'] = "usuarios/cadastro_usuario";

            $this->load->view("index", $this->dados);
        }
    }

}