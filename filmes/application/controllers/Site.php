<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Filmes_Model');
		$this->load->helper(array('text'));
	}

	public function index()
	{
		$por_pagina = 2;
		$inicio = $this->uri->segment(2); //Está pegando o segundo campo da url
		$tabela = 'filmes'; //Tabela no banco

		$data['title'] = "Filmes";
		$data['view'] = 'home.php';

		$data['filmes_encontrados'] = $this->Filmes_Model->findPagination($tabela, $por_pagina, $inicio);

		// ** Dados para paginação ** 
		$this->load->library('pagination');
		
		$config['base_url'] = base_url() . 'page/';
		$config['per_page'] = $por_pagina; 
		$config['total_rows'] = $this->Filmes_Model->num_rows($tabela);
		$config['num_links'] = 5;
		$config['first_url'] = '1';
		$config['uri_segment'] = 2;

		//** Inicializar a paginação **
		$this->pagination->initialize($config);
		//** Criar links da paginação ** 
		$data['paginacao_filmes'] = $this->pagination->create_links(); 

		$this->load->template('site', $data);
	}
}
