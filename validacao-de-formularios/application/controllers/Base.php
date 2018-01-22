<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Base extends CI_Controller {

    public function index() 
    {
        $data['title'] = "Estudo | Validação de formulários";
        $data['description'] = "Capítulo 7 - Validando formulários";
        $this->load->view('home', $data);
    }

}