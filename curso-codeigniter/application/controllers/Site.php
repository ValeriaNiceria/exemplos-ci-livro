<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Filmes');
	}

	public function index()
	{
		$attributes = array(
			'filme_nome' => 'Mad Max',
			'filme_descricao' => 'Filme ação'
		);

		$this->Filmes->cadastrar_filme($attributes);

		$data['title'] = "Bem vindo ao Curso CodeIgniter";
		$data['view'] = 'home.php';

		$data['filmes_encontrados'] = $this->Filmes->listar_filmes();

		$this->load->view('site', $data);
	}
}
