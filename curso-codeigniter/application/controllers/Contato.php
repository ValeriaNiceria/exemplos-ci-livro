<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function index()
    {
        $data['title'] = "Contato";
        $data['view'] = 'contato.php';

        $this->load->view('site', $data);
    }
}