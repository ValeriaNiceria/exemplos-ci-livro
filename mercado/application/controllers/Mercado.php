<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mercado extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("form");
    }

    public function index()
    {
        $dados['title'] = "Acesso ao mercado";
        $dados['view'] = "login";
        $this->load->view('index', $dados);
    }

    public function autenticar()
    {
        $this->load->model("UsuariosModel");

        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));

        $usuario = $this->UsuariosModel->buscaPorEmailSenha($email, $senha);

        if ($usuario) 
        {
            $this->session->set_userdata("usuario_logado", $usuario);

            $this->dados['title'] = "Bem Vindo";
            $this->dados['view'] = "home";
            $this->dados['aviso_success'] = ucwords($usuario['nome']) . ", logado com sucesso!";
        } else 
        {
            $this->dados['title'] = "Login";
            $this->dados['view'] = "login";;
            $this->dados['aviso_error'] = "Email ou senha inválidos!";
        }
        $this->load->view("index", $this->dados);
    }

}