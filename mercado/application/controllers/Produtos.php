<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper(array("currency"));
        
    }

    public function lista() 
    {
        $dados = array();

        $dados['title'] = "Lista de Produtos";
        $dados['view'] = "produtos/lista.php";

        $this->load->model("ProdutosModel");
        $produtos = $this->ProdutosModel->buscaProdutos();

        $dados['produtos'] = $produtos;

        $this->load->view("index", $dados);
    }

}