<?php

class Email extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {

		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'valerianiceria@gmail.com',
			'smtp_pass' => '*PASS*'
		);

		$this->load->library('email', $config);

		$this->email->set_newline("\r\n");

		$this->email->from('valerianiceria@gmail.com', 'TESTE CODEIGNITER');
		$this->email->to('valerianiceria@gmail.com', 'TESTE');
		$this->email->subject('TESTE');
		$this->email->message('CODEIGNITER');

		if ($this->email->send()) {
			echo 'Seu email foi enviado com sucesso!';
		} else {
			show_error($this->email->print_debugger());
		}
	}
}