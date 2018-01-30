<?php 

echo heading('Cadastro de Usuário', 1);

echo form_open("usuarios/novo");

echo form_label("Nome", "nome");
echo form_input(array(
    "name" => "nome",
    "id" => "nome", 
    "placeholder" => "Nome",
    "maxlength" => "255",
    "class" => "form-control"
));

echo form_label("Email", "email");
echo form_input(array(
    "name" => "email",
    "id" => "email",
    "placeholder" => "Email",
    "maxlength" => "255",
    "class" => "form-control"
));

echo form_label("Senha", "senha");
echo form_password(array(
    "name" => "senha",
    "id" => "senha",
    "placeholder" => "Senha",
    "maxlength" => "255",
    "class" => "form-control"
));

echo form_button(array(
    "class" => "btn btn-primary float-right px-4 mt-2",
    "content" => "Cadastrar",
    "type" => "submit"
));

echo form_close();
