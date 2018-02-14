<?php

class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->load->library('cart');
		$this->load->model('Filmes_Model');

		if ($_POST) {

			/*Dados para inserir o produto no carrinho*/
			$id = $this->input->post('id');
			$qtd = $this->input->post('qtd');

			$tabela = 'filmes';
			$where = ['id', $id];

			$dados_carrinho = $this->Filmes_Model->findById($tabela, $where);

			$data = array(
		        'id'      => $id,
		        'qty'     => $qtd,
		        'price'   => $dados_carrinho['filme_preco'],
		        'name'    => $dados_carrinho['filme_nome']
			);

			$this->cart->insert($data);

		}

		$data['title'] = 'Carrinho de compras';
		$data['view'] = 'cart';
		$this->load->template('site', $data);

	}
}