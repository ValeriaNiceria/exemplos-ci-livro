<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

    public function index()
    {
        $data['title'] = "Sobre a empresa";
        $data['view'] = 'sobre.php';

        $this->load->view('site', $data);
    }
}