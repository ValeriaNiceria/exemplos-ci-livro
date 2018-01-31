<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public $dados = array();

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper(array("currency", "form"));
        $this->load->model("ProdutosModel");
        
    }

    public function lista() 
    {
        $this->dados['title'] = "Lista de Produtos";
        $this->dados['view'] = "produtos/lista";

        $produtos = $this->ProdutosModel->buscaProdutos();
        $this->dados['produtos'] = $produtos;

        $this->load->view("index", $this->dados);
    }

    public function formulario_cadastro()
    {
        $this->dados['title'] = "Cadastro de Produto";
        $this->dados['view'] = "produtos/cadastro_produto";

        $this->load->view("index", $this->dados);
    }

    public function novo()
    {
        $produto = array(
            "nome" => $this->input->post("nome"),
            "preco" => $this->input->post("preco"),
            "descricao" => $this->input->post("descricao")
        );

        if ($this->ProdutosModel->salva($produto))
        {
            $this->dados['title'] = "Lista Produtos";
            $this->dados['view'] = "produtos/lista";
            $this->dados['aviso'] = "Cadastro realizado com sucesso";

            $produtos = $this->ProdutosModel->buscaProdutos();
            $this->dados['produtos'] = $produtos;

            $this->load->view("index", $this->dados);
        }
    }

}