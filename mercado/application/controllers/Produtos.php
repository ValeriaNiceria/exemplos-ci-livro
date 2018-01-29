<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index()
    {
        $this->load->database();

        $this->load->model("ProdutosModel");
        $produtos = $this->ProdutosModel->buscaProdutos();

        $dados = array();
        $dados['produtos'] = $produtos;

        $this->load->view("produtos/index", $dados);

    }
    

}