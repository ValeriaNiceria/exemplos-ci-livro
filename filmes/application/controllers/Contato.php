<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($_POST) :

            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $assunto = $this->input->post('assunto');
            $mensagem = $this->input->post('mensagem');

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
                ),
                array(
                    "field" => "assunto",
                    "label" => "Assunto",
                    "rules" => "trim|required"
                ),
                array(
                    "field" => "mensagem",
                    "label" => "Mensagem",
                    "rules" => "trim|required"
                )
            );

            $this->form_validation->set_rules($config);

            $this->form_validation->set_error_delimiters("<p class='errors'>", "</p>"); //Mensagem de erro abaixo do campo

            if ($this->form_validation->run()) {

                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'valerianiceria@gmail.com',
                    'smtp_pass' => '*PASSWORD*'
                );

                $this->load->library('email', $config);

                $this->email->set_newline("\r\n");

                $this->email->from($email, $nome);
                $this->email->to('valerianiceria@gmail.com', 'CodeIgniter Sistema Filmes');
                $this->email->subject($assunto);
                $this->email->message($mensagem);

                if ($this->email->send()) {
                    $data['enviado'] = 'Seu contato foi enviado com sucesso!';
                } else {
                    show_error($this->email->print_debugger());
                }
               
            }
        endif;

        $data['title'] = 'Contato';
        $data['view'] = 'contato.php';

        $this->load->template('site', $data);
    }
}