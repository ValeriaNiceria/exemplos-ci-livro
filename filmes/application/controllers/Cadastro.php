<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends  MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
       
        if ($_POST) {

            /* Pega dados do form e colocar em variáveis */
            $quantidade = $this->input->post("qtd");
            $nome = $this->input->post("nome");
            $descricao = $this->input->post("descricao");
            $preco = $this->input->post("preco");
            $vendedor_id = $this->session->userdata("id_admin");

            /* Verifica se os campos estão vazios */
            $this->form_validation->set_rules('qtd', 'Quantidade', 'trim|required');
            $this->form_validation->set_rules('nome', 'Nome', 'trim|required|is_unique[filmes.filme_nome]');
            $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required');
            $this->form_validation->set_rules('preco', 'Preço', 'trim|required');

            /* Adiciona a mensagem de erro abaixo do campo*/
            $this->form_validation->set_error_delimiters("<p class='errors'>", "</p>");

            /* Verifica se retornou algum erro ao validar os campos */
            if ($this->form_validation->run()) {
                
                $uploadFoto = $this->UploadFile('foto');

                /*Verifica se ocorreu um erro no upload da foto*/
                if ($uploadFoto['error']) {
                    $data['erro'] = $uploadFoto['message'];
                } else {
                    /*Faz resize da foto*/
                    $this->load->library("image_lib");

                    $config_resize['source_image'] = $_FILES['foto']['tmp_name'];
                    $config_resize['new_image'] = $uploadFoto['arquivo']['file_path'].'thumbs/'.$uploadFoto['arquivo']['file_name'];
                    $config_resize['image_library'] = 'gd2';
                    $config_resize['create_thumb'] = FALSE;
                    $config_resize['maintain_ratio'] = TRUE;
                    $config_resize['width'] = '200';
                    $config_resize['height'] = '150';

                    $this->image_lib->initialize($config_resize);

                    /*Verifica se foi feito o resize da foto*/
                    if (!$this->image_lib->resize()) {
                        unlink($uploadFoto['arquivo']['full_path']); //Deleta a foto caso ocorra um erro no resize
                        $data['erro'] = $this->image_lib->display_errors();
                    } else {
                        /* Faz o cadastro no banco */
                        $this->load->model('Filmes_Model');


                        $attributes = array(
                            'filme_quantidade' => $quantidade,
                            'filme_nome' => $nome,
                            'filme_descricao' => $descricao,
                            'filme_preco' => $preco,
                            'filme_foto' => 'public/arquivos/'. $uploadFoto['arquivo']['file_name'],
                            'filme_thumb' => 'public/arquivos/thumbs/'.$uploadFoto['arquivo']['file_name'],
                            'vendedor_id' => $vendedor_id
                        );

                        $tabela = 'filmes'; //tabela do banco de dados

                        if ($this->Filmes_Model->create($tabela, $attributes)) {
                            redirect(site_url());
                        }

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