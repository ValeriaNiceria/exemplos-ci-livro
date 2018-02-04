<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller {

    public $dados = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Vendas_model");
        $this->load->model("ProdutosModel");
        $this->load->helper("data");
    }

    public function nova()
    {
        $logado = autoriza();

        if ($logado) {
            $usuario = $this->session->userdata("usuario_logado");

            $venda = array(
                'produto_id' => $this->input->post("produto_id"),
                'comprador_id' => $usuario['id'],
                'data_de_entrega' => $this->input->post("data_de_entrega")
            );

            $this->Vendas_model->salva($venda);

            $this->dados['aviso'] = "Pedido de compra efetuado com sucesso!";
            $this->dados['title'] = "Sistema Mercado";
            $this->dados['view'] = "produtos/nova";
            $this->load->view("index", $this->dados);
        }
    }

    public function lista()
    {
        $logado = autoriza();

        if ($logado) {
            $this->dados['title'] = "Produtos vendidos";
            $this->dados['view'] = "produtos/lista_vendidos";

            $usuario = $this->session->userdata("usuario_logado");

            $produtosVendidos = $this->ProdutosModel->busca_vendidos($usuario);

            $this->dados['produtosVendidos'] = $produtosVendidos;

            $this->load->view("index", $this->dados);
        }
    }

}