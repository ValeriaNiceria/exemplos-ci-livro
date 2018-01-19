<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper('form');
    }

    public function FaleConosco()
    {
        $data['title'] = "LCI | Fale Conosco";
        $data['description'] = "Exercício de exemplo do capítulo 6 do livro CodeIgniter";

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required|min_length[30]');

        if ($this->form_validation->run() == FALSE) {
            $data['formErrors'] = validation_errors();
        } else {
            $formData = $this->input->post();
            $emailStatus = $this->SendEmailToAdmin($formData['email'], $formData['nome'], 
                        "to@domain.com", "ToName", $formData['assunto'], $formData['mensagem'], 
                        $formData['email'], $formData['nome']);

            if ($emailStatus) {
                $this->session->flashdata('success_msg', 'Contato recebido com sucesso!');
            } else {
                $data['formErrors'] = "Desculpe! Não foi possível enviar o seu contato. Tente novamente mais tarde!";
            }
        }

        $this->load->view('fale-conosco', $data);
    }

    public function TrabalheConosco()
    {
        $data['title'] = "LCI | Trabalhe Conosco";
        $data['description'] = "Exercício de exemplo do capítulo 6 do livro CodeIgniter";

        $this->load->view('trabalhe-conosco', $data);
    }

    private function SendEmailToAdmin($from, $fromName, $to, $toName, $subject, $message, $reply = null, $replyName = null)
    {
        $this->load->library('email');

        $config['charset'] = 'utf8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.seudominio.com.br';
        $config['smtp_user'] = 'user@seudominio.com.br';
        $config['smtp_pass'] = 'suasenha';
        $config['newline'] = '\r\n';

        $this->email->initialize($config);

        $this->email->from($from, $fromName);
        $this->email->to($to, $toName);

        if ($reply) {
            $this->email->reply_to($reply, $replyName);

            $this->email->subject($subject);
            $this->email->message($message);
        }

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

}