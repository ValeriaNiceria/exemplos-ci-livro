<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$data['title'] = "Bem vindo ao Curso CodeIgniter";
		$data['view'] = 'home.php';

		$this->load->view('site', $data);
	}
}
