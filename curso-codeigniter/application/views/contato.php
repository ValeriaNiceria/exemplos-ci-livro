<?php

echo heading('Contato', 1);

echo form_open('contato/enviar'); //(controller/método)

echo form_label('Nome:', 'nome');
echo form_input(array(
    "name" => "nome",
    "id" => "nome",
    "placeholder" => "Nome"
));

echo form_label('Email:', 'email');
echo form_input(array(
    "name" => "email",
    "id" => "email",
    "placeholder" => "E-mail"
));

echo form_label('Assunto:', 'assunto');
echo form_input(array(
    "name" => "assunto",
    "id" => "assunto",
    "placeholder" => "Assunto"
));

echo form_label('Mensagem:', 'mensagem');
echo form_textarea(array(
    "name" => "mensagem",
    "id" => "mensagem",
    "placeholder" => "Mensagem"
));

echo form_button(array(
    "content" => "Enviar",
    "type" => "submit",
    "class" => "btn"
));

echo form_close();

echo (isset($errors)) ? '<div class="errors">' . $errors . '</div>' : '';

echo (isset($enviado)) ? 'Email enviado com sucesso!' : '';

