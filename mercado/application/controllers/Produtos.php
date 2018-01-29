<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index()
    {
        $produtos = array();
        $bola = array(
            "nome" => "Bola de Futebol",
            "descricao" => "Bola de futebol assinada",
            "preco" => 300
        );
        $hd = array(
            "nome" => "HD Externo",
            "descricao" => "HD da marca Mega-HD",
            "preco" => 500
        );
        array_push($produtos, $bola, $hd);

        $dados = array("produtos" => $produtos);


        $this->load->view("produtos/index", $dados);

    }
    

}