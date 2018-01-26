<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        $data['title'] = "Contato";
        $data['view'] = 'contato.php';

        $this->load->view('site', $data);
    }
}