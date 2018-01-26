<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Filmes');
	}

	public function index()
	{
		/*
		$attributes = array(
			'filme_nome' => 'Mad Max',
			'filme_descricao' => 'Filme de ação'
		);

		$this->Filmes->atualizar_filme(5, $attributes);
		*/
		//$this->Filmes->cadastrar_filme($attributes);

		//$this->Filmes->deletar_filme(2);


		$por_pagina = 2;
		$inicio = $this->uri->segment(2); //Está pegando o segundo campo da url

		$data['title'] = "Bem vindo ao Curso CodeIgniter";
		$data['view'] = 'home.php';

		$data['filmes_encontrados'] = $this->Filmes->listar_filmes($por_pagina, $inicio);

		// ** Dados para paginação ** 
		$this->load->library('pagination');
		
		$config['base_url'] = base_url() . 'page/';
		$config['per_page'] = $por_pagina; 
		$config['total_rows'] = $this->Filmes->get_total_filmes();
		$config['num_links'] = 5;
		$config['first_url'] = '1';
		$config['uri_segment'] = 2;

		//** Inicializar a paginação **
		$this->pagination->initialize($config);
		//** Criar links da paginação ** 
		$data['paginacao_filmes'] = $this->pagination->create_links(); 

		$this->load->view('site', $data);
	}
}
