<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("form");
        $this->load->library("form_validation");
    }

    public function index() {
        $data['view'] = 'cadastro.php';
        $data['title'] = 'Cadastro';
        $this->load->template('site', $data);
    }

    public function register() {
       
        if ($_POST) {

            /* Pega dados do form e colocar em variáveis */
            $nome = $this->input->post("nome");
            $descricao = $this->input->post("descricao");

            /* Verifica se os campos estão vazios */
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('descricao', 'Descrição', 'required');

            /* Adiciona a mensagem de erro abaixo do campo*/
            $this->form_validation->set_error_delimiters("<p class='errors'>", "</p>");

            /* Verifica se retornou algum erro ao validar os campos */
            if ($this->form_validation->run()) {
                
                $uploadFoto = $this->UploadFile('foto');

                if ($uploadFoto['error']) {
                    $data['erro'] = $uploadFoto['message'];
                } else {
                    /* Faz o cadastro no banco */
                    $this->load->model('Filmes');

                    $attributes = array(
                        'filme_nome' => $nome,
                        'filme_descricao' => $descricao,
                        'filme_foto' => $uploadFoto['arquivo']['full_path']
                    );

                   if ($this->Filmes->cadastrar_filme($attributes)) {
                       $data['sucesso'] = 'Cadastro realizado com sucesso!';
                   } else {
                       $data['erro'] = 'Erro ao relizar o cadastro!'; 
                   }
                }
            }
        }
        $data['view'] = 'cadastro';
        $data['title'] = 'Cadastro de Filme';
        $this->load->template('site', $data);

    }

    public function UploadFile($inputFileName) {

        $this->load->library("upload");

        $path = "./public/arquivos/";

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '500';
        $config['max_height'] = '500';
        $config['max_width'] = '500';
        $config['encrypt_name'] = TRUE;

        if (!is_dir($path)) {
            mkdir($path, 0777, $recursive = true);
        }

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($inputFileName)) :
            $data['error'] = true;
            $data['message'] = $this->upload->display_errors();
        else :
            $data['error'] = false;
            $data['arquivo'] = $this->upload->data();
        endif;

        return $data;    
    }

}