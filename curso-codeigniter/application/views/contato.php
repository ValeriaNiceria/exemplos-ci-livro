<?php

echo heading('Formulário de contato', 1);

echo form_open('contato/enviar'); //(controller/método)

echo form_label('Nome:');
echo form_input(array("name" => "nome"));

echo form_label('Email:');
echo form_input(array("name" => "email"));

echo form_label('Assunto:');
echo form_input(array("name" => "assunto"));

echo form_label('Mensagem:');
echo form_textarea(array("name" => "mensagem"));

echo form_submit(array("value" => "Enviar"));

echo form_close();

echo (isset($errors)) ? '<div class="errors">' . $errors . '</div>' : '';

echo (isset($enviado)) ? 'Email enviado com sucesso!' : '';

