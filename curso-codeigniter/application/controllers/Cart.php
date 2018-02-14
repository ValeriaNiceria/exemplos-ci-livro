<?php

class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->load->library('cart');
		$this->load->model('Filmes_Model');

		if ($_POST) {

			$inserir = TRUE;
			$produtos_do_carrinho = $this->cart->contents();

			/*Dados para inserir o produto no carrinho*/
			$id = $this->input->post('id');
			$qtd = $this->input->post('qtd');

			/*Pega dados para atualizar o carrinho*/
			foreach ($produtos_do_carrinho as $produto) {
				if ($produto['id'] == $id) {
					$rowid = $produto['rowid'];
					$qty = $produto['qty'] + $qtd;
					$inserir = FALSE;
				}
			}			

			/*Dados para pegar o filme do banco e adicionar no carrinho*/
			$tabela = 'filmes';
			$where = ['id', $id];

			$dados_carrinho = $this->Filmes_Model->findById($tabela, $where);

			$insert = array(
		        'id'      => $id,
		        'qty'     => $qtd,
		        'price'   => $dados_carrinho['filme_preco'],
		        'name'    => $dados_carrinho['filme_nome']
			);

			if ($inserir) {
				$this->cart->insert($insert);
			} else {
				$update = ['rowid' => $rowid, 'qty' => $qty];
				$this->cart->update($update);
			}
			

		}

		$data['title'] = 'Carrinho de compras';
		$data['view'] = 'cart';
		$this->load->template('site', $data);
	}

	public function update() {

		$this->load->library('cart');

		$this->cart->update($_POST);
		redirect('cart');

	}

}