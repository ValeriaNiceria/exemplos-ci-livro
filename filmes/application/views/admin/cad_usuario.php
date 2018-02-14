<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet"> 
	<?php echo link_tag('public/css/site.css'); ?> <!-- Substitui o 'link' -->
	<?php echo link_tag('public/bootstrap/css/bootstrap.css'); ?> 
</head>
<body>

<div id="container">

<?php

echo heading('Cadastro de Usuário', 1);

echo form_open('admin/usuario');

echo form_label('Nome:', 'nome');
echo form_input(array(
    'name' => 'nome',
    'id' => 'nome',
    'placeholder' => 'Nome Usuário',
    'class' => 'input-xxlarge',
    'value' => set_value('nome', '')
));
echo form_error('nome');

echo form_label('E-mail:', 'email');
echo form_input(array(
    'name' => 'email',
    'id' => 'email',
    'placeholder' => 'E-mail',
    'class' => 'input-xxlarge',
    'value' => set_value('email', '')
));
echo form_error('email');

echo form_label('Senha:', 'senha');
echo form_password(array(
    'name' => 'senha',
    'id' => 'senha',
    'placeholder' => 'Senha',
    'class' => 'input-xxlarge',
    'value' => set_value('senha', '')
)); 
echo form_error('senha');

echo '<div class="fix"></div>';

echo anchor('admin/login', 'Cancelar', array(
    'class' => 'btn btn-large disabled btn-novo'
));

echo form_button(array(
    'content' => 'Cadastrar',
    'type' => 'submit',
    'class' => 'btn btn-large btn-primary btn-logar'
));
echo form_close();

echo isset($message_success) ? '<div class="success">' .$message_success. '</div>' : ''; 
echo isset($message_erro) ? '<div class="errors">' .$message_erro. '</div>' : '';


?>

</div>

</body>
</html>