<?php

echo heading("Cadastro de Produto", 1);

echo form_open("produtos/novo");

echo form_label("Nome", "nome");
echo form_input(array(
    "name" => "nome",
    "id" => "nome",
    "maxlength" => "255",
    "placeholder" => "Nome",
    "class" => "form-control"
));

echo form_label("Preço", "preco");
echo form_input(array(
    "name" => "preco",
    "id" => "preco",
    "placeholder" => "Preço",
    "class" => "form-control",
    "type" => "number"
));

echo form_label("Descrição", "descricao");
echo form_textarea(array(
    "name" => "descricao",
    "id" => "descricao",
    "placeholder" => "Descrição",
    "class" => "form-control"
));

echo form_button(array(
    "content" => "Cadastrar",
    "type" => "submit",
    "class" => "btn btn-primary float-right px-4 mt-2"
));

echo form_close();