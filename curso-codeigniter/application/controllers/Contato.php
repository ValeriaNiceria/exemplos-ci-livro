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

        $this->load->template('site', $data);
    }

    public function enviar()
    {
        if ($_POST) :
            $this->load->library('form_validation');

            //$this->form_validation->set_rules("nome", "Nome", "trim|required");
            //$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");

            $config = array(
                array(
                    "field" => "nome",
                    "label" => "Nome",
                    "rules" => "trim|required"
                ),
                array(
                    "field" => "email",
                    "label" => "Email",
                    "rules" => "trim|required|valid_email"
                )
            );

            $this->form_validation->set_rules($config);

            if (!$this->form_validation->run()) {
                $data['errors'] = validation_errors();
            } else {
                $this->load->library("email");

                $config = $this->email->setConfiguration();
                $this->email->initialize($config);

                $this->email->to('valerianiceria@gmail.com');
                $this->email->from($this->input->post('email'));
                $this->email->subject($this->input->post('assunto'));
                $this->email->message($this->input->post('mensagem'));

                if ($this->email->send()) {
                    $data['enviado'] = true;
                }
               
            }
        endif;

        $data['title'] = 'Contato';
        $data['view'] = 'contato.php';

        $this->load->template('site', $data);
    }
}