<?php

defined('BASEPATH') OR exit('No direct');

class Filme extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Filmes_Model');
        ini_set('display_errors', E_ALL); //mensagem de erro
    }

    public function detalhes() {
        $tabela = 'filmes'; //tabela do DB
        $id = $this->uri->segment(3);
        $where = ['id', $id]; 

        $data['filme_encontrado'] = $this->Filmes_Model->findById($tabela, $where);

        $data['title'] = 'Detalhes ' . $data['filme_encontrado']['filme_nome'];
        $data['view'] = "detalhes";

        $this->load->template('site', $data);
    }
}