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
        //Informações - imprime na página
        $this->output->enable_profiler(TRUE);

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
        $usuariologado = $this->session->userdata("usuario_logado");

        $produto = array(
            "nome" => $this->input->post("nome"),
            "preco" => $this->input->post("preco"),
            "descricao" => $this->input->post("descricao"),
            "usuario_id" => $usuariologado["id"]
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

    public function meus_produtos()
    {
        $usuario = $this->session->userdata("usuario_logado");
        $produtos = $this->ProdutosModel->meus_produtos($usuario["id"]);

        $this->dados["produtos"] = $produtos;

        $this->dados['title'] = "Meus Produtos";
        $this->dados['view'] = "produtos/lista_meus";

        $this->load->view("index", $this->dados);
    }

}