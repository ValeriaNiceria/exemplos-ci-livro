<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public $dados = array();

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper(array("currency"));
        $this->load->model("ProdutosModel");
        
    }

    public function lista() 
    {
        $this->dados['title'] = "Lista de Produtos";
        $this->dados['view'] = "produtos/lista.php";

        $produtos = $this->ProdutosModel->buscaProdutos();
        $this->dados['produtos'] = $produtos;

        $this->load->view("index", $this->dados);
    }

}