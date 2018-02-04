<?php 

echo heading('Cadastro de Usuário', 1);

echo form_open("usuarios/novo");

echo form_label("Nome", "nome");
echo form_input(array(
    "name" => "nome",
    "id" => "nome", 
    "placeholder" => "Nome",
    "maxlength" => "255",
    "class" => "form-control",
    "value" => set_value("nome", "")
));
echo form_error("nome");

echo form_label("Email", "email");
echo form_input(array(
    "name" => "email",
    "id" => "email",
    "placeholder" => "Email",
    "maxlength" => "255",
    "class" => "form-control",
    "value" => set_value("email", "")
));
echo form_error("email");

echo form_label("Senha", "senha");
echo form_password(array(
    "name" => "senha",
    "id" => "senha",
    "placeholder" => "Senha",
    "maxlength" => "255",
    "class" => "form-control",
    "value" => set_value("senha", "")
));
echo form_error("senha");

echo form_button(array(
    "class" => "btn btn-primary float-right px-4 mt-2",
    "content" => "Cadastrar",
    "type" => "submit"
));

echo anchor("mercado", "Cancelar", array(
    "class" => "btn btn-info mt-2 mx-2 mb-3 float-right"
));

echo form_close();
