<?php

class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->load->library('cart');
		
		if ($_POST) {

			$data = array(
		        'id'      => '1',
		        'qty'     => $this->input->post('qtd'),
		        'price'   => '39.95',
		        'name'    => 'Filme test'
			);

			$this->cart->insert($data);

		}

		$data['title'] = 'Carrinho de compras';
		$data['view'] = 'cart';
		$this->load->template('site', $data);

	}
}