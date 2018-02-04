<?php

function autoriza() {
    $ci = get_instance();

    $usuarioLogado = $ci->session->userdata("usuario_logado");

    if (!$usuarioLogado) {
        $ci->dados['title'] = "Acesso ao mercado";
        $ci->dados['view'] = "login";
        $ci->dados['aviso_error'] = "Você precisa estar logado!";
            
        $ci->load->view("index", $ci->dados);
    }

    return $usuarioLogado;
}