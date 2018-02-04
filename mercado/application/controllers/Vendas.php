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

            //Enviando e-mail para o vendedor informando que o produto foi vendido
            $this->load->library("email");

            $config["protocol"] = "smtp";
            $config["smtp_host"] = "ssl://smtp.gmail.com";
            $config["smtp_user"] = "valerianiceria@gmail.com";
            $config["smtp_pass"] = "password";
            $config["charset"] = "utf-8";
            $config["mailtype"] = "html";
            $config["newline"] = "\r\n";
            $config["smtp_port"] = '465';

            $this->email->initialize($config);

            $produto = $this->ProdutosModel->busca($venda['produto_id']);
            $vendedor = $this->UsuariosModel->buscaUsuario($produto['usuario_id']);

            $this->dados['produto'] = $produto;
            $conteudo = $this->load->view("vendas/email", $this->dados, TRUE);

            $this->email->from("valerianiceria@gmail.com", "Mercado");
            $this->email->to(array($vendedor['email'], $vendedor['nome']));
            $this->email->subject("Seu produto {$produto['nome']} foi vendido!");
            $this->email->message($conteudo);
            $this->email->send();

            
            
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