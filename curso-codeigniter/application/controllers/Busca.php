<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Busca extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Filmes_Model");
        $this->load->helper(array("text"));
    }

    public function filme() {

        $data['view'] = 'busca';
        $data['title'] = 'Filmes encontrados';

        $por_pagina = 1;
        $inicio = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;

        if ($_GET || $this->uri->segment(5)) {
            $filme_busca = ($this->input->get("busca")) ? $this->input->get("busca") : $this->uri->segment(3);
            
            $filmes_encontrados = $this->Filmes_Model->buscar_filmes($filme_busca, $por_pagina, $inicio);
            $data['filmes_encontrados'] = $filmes_encontrados;

            // ** Dados para paginação ** 
            $this->load->library('pagination');
            
            $config['base_url'] = base_url('busca/filme/') . '/' . $filme_busca . '/page/';
            $config['per_page'] = $por_pagina; 
            $config['total_rows'] = $this->Filmes->get_total_filmes_busca($filme_busca);
            $config['num_links'] = 5;
            $config['first_url'] = '1';
            $config['uri_segment'] = 5;

            //** Inicializar a paginação **
            $this->pagination->initialize($config);
            //** Criar links da paginação ** 
            $data['paginacao_filmes'] = $this->pagination->create_links(); 

        } else {
            //Se não clicou no form mandar para a página inicial
            redirect(site_url());
        }


        $this->load->template('site', $data);
    }
}