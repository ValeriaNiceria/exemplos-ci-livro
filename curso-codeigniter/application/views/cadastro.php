<?php
echo heading("Cadastro de Filme", 1);

echo form_open_multipart('cadastro/register');

echo form_label("Nome:", "nome");
echo form_input(array(
    "name" => "nome",
    "id" => "nome",
    "placeholder" => "Nome do Filme"
), set_value('nome', '')
);
echo form_error("nome");

echo form_label("Descrição:", "descricao");
echo form_textarea(array(
    "name" => "descricao",
    "id" => "descricao",
    "placeholder" => "Descrição do Filme"
), set_value('descricao', '')
);
echo form_error("descricao");

echo form_label("Anexo Foto:", "foto");
echo form_upload(array(
    "name" => "foto",
    "id" => "foto"
), set_value('foto', '')
);

echo form_button(array(
    "content" => "Cadastrar",
    "type" => "submit",
    "class" => "btn"
));

echo form_close();


echo (isset($erro)) ? '<div class="errors">' .$erro. '</div>' : '' ;
echo (isset($sucesso)) ? '<div class="success">'.$sucesso. '</div>' : '';