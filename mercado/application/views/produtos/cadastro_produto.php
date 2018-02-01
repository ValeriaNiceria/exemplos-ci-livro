<?php

echo heading("Cadastro de Produto", 1);

//echo validation_errors("<p class='alert alert-danger'>", "</p>");

echo form_open("produtos/novo");

echo form_label("Nome", "nome");
echo form_input(array(
    "name" => "nome",
    "id" => "nome",
    "maxlength" => "255",
    "placeholder" => "Nome",
    "class" => "form-control",
    "value" => set_value("nome", "")
));
echo form_error("nome");

echo form_label("Preço", "preco");
echo form_input(array(
    "name" => "preco",
    "id" => "preco",
    "placeholder" => "Preço",
    "class" => "form-control",
    "type" => "number",
    "value" => set_value("preco", "")
));
echo form_error("preco");

echo form_label("Descrição", "descricao");
echo form_textarea(array(
    "name" => "descricao",
    "id" => "descricao",
    "placeholder" => "Descrição",
    "class" => "form-control",
    "value" => set_value("descricao", "")
));
echo form_error("descricao");

echo form_button(array(
    "content" => "Cadastrar",
    "type" => "submit",
    "class" => "btn btn-primary float-right px-4 mt-2"
));

echo form_close();