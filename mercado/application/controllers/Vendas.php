<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller {

    public $dados = array();

    public function nova()
    {
        $usuario = $this->session->userdata("usuario_logado");

        $this->load->model("Vendas_model");

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