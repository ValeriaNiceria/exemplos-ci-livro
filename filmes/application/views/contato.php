<?php

echo '<div class="fix"></div>';

echo heading('Contato', 1);

echo form_open('contato/enviar'); //(controller/método)

echo form_label('Nome:', 'nome');
echo form_input(array(
    "name" => "nome",
    "id" => "nome",
    "placeholder" => "Nome",
    "class" => "input-xxlarge",
    "value" => set_value("nome", "")
));
echo form_error("nome");

echo form_label('Email:', 'email');
echo form_input(array(
    "name" => "email",
    "id" => "email",
    "placeholder" => "E-mail",
    "class" => "input-xxlarge",
    "value" => set_value("email", "")
));
echo form_error("email");

echo form_label('Assunto:', 'assunto');
echo form_input(array(
    "name" => "assunto",
    "id" => "assunto",
    "placeholder" => "Assunto",
    "class" => "input-xxlarge",
    "value" => set_value("assunto", "")
));
echo form_error("assunto");

echo form_label('Mensagem:', 'mensagem');
echo form_textarea(array(
    "name" => "mensagem",
    "id" => "mensagem",
    "placeholder" => "Mensagem",
    "class" => 'form',
    "class" => "input-xxlarge",
    "value" => set_value("mensagem", "")
));
echo form_error("mensagem");

echo '<div class="fix"></div>';

echo form_button(array(
    "content" => "Enviar",
    "type" => "submit",
    'class' => 'btn btn-primary btn-large botao'
));

echo form_close();

echo (isset($erro)) ? '<div class="errors">' . $erro . '</div>' : '';

echo (isset($enviado)) ? 'Email enviado com sucesso!' : '';


?>
