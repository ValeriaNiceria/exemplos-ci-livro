<?php

echo '<div class="fix"></div>';

echo heading("Cadastro de Filme", 1);

echo form_open_multipart('cadastro/register');

echo form_label("Quantidade:", "qtd");
echo form_input(array(
    "name" => "qtd",
    "id" => "qtd",
    "type" => "number",
    "placeholder" => "Quantidade",
    "min" => "1",
    "class" => "input-medium",
    "value" => set_value("qtd", "")
));
echo form_error("qtd");

echo form_label("Nome:", "nome");
echo form_input(array(
    "name" => "nome",
    "id" => "nome",
    "placeholder" => "Nome do Filme",
    "class" => "input-xxlarge",
    "value" => set_value("nome", "")
));
echo form_error("nome");

echo form_label("Descrição:", "descricao");
echo form_textarea(array(
    "name" => "descricao",
    "id" => "descricao",
    "placeholder" => "Descrição do Filme",
    "class" => "input-xxlarge",
    "value" => set_value("descricao", "")
));
echo form_error("descricao");

echo form_label("Preço Filme:", "preco");
echo form_input(array(
    "name" => "preco",
    "id" => "preco",
    "placeholder" => "Preço do Filme",
    "class" => "input-xxlarge",
    "value" => set_value("preco", "")
));
echo form_error("preco");

echo form_label("Anexar foto:", "foto");
echo form_upload(array(
    "name" => "foto",
    "id" => "foto"
), set_value('foto', '')
);

echo '<div class="fix"></div>';

echo form_button(array(
    "content" => "Cadastrar",
    "type" => "submit",
    'class' => 'btn btn-primary btn-large botao'
));

echo form_close();


echo (isset($erro)) ? '<div class="errors">' .$erro. '</div>' : '' ;

?>