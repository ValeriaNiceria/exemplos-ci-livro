<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper(array("currency", "form"));
        
    }

    public function index()
    {
        $this->load->model("ProdutosModel");
        $produtos = $this->ProdutosModel->buscaProdutos();

        $dados = array();
        $dados['produtos'] = $produtos;

        $this->load->view("produtos/index", $dados);

    }
    

}