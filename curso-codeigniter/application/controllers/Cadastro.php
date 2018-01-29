<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("form");
    }

    public function index() {
        $data['view'] = 'cadastro.php';
        $data['title'] = 'Cadastro';
        $this->load->view('site', $data);
    }

    public function register() {
       
        if ($_POST) {

            $this->load->library('upload');

            $this->upload->setTypes('jpeg|jpg|png');
            $this->upload->setWidth(500);
            $this->upload->setHeight(500);
            $this->upload->setPath('./public/arquivos/');
            $this->upload->setSize(200);   

            $config = $this->upload->setConfiguration();
            $this->upload->initialize($config);

            if (!$this->upload->do_upload()) {
                $data['error'] = $this->upload->display_errors();
            }
        }
        
        $data['view'] = 'cadastro.php';
        $data['title'] = 'Cadastro';
        $this->load->view('site', $data);

    }

}