<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function formulario_cadastro() 
    {
        $dados = array();

        $dados['title'] = "Cadastro de usuários";
        $dados['view'] = "usuarios/cadastro_usuario.php";

        $this->load->view("index", $dados);
    }

    public function novo()
    {
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha")) //senha criptografada
        );

        $this->load->model("UsuariosModel");
        $this->UsuariosModel->salva($usuario);
        $this->load->view("usuarios/novo");
    }

}