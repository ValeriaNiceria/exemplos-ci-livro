<?php

defined('BASEPATH') OR exit('No direct ');

class Painel extends MY_Controller {

	public function index() {
		$data['title'] = "Painel de Acesso";
		$data['view'] = "admin/painel";

		$this->load->template('site', $data);
	}
}