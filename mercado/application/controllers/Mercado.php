<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mercado extends CI_Controller {

    public function index()
    {
        $dados['title'] = "Mercado";
        $dados['view'] = "home.php";

        $this->load->view('index', $dados);
    }

}