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
echo heading('Login', 1);

echo form_open();

echo form_label('E-mail:', 'email');
echo form_input(array(
    'name' => 'email',
    'id' => 'email',
    'placeholder' => 'E-mail',
    'class' => 'input-xxlarge'
));

echo form_label('Senha:', 'senha');
echo form_password(array(
    'name' => 'senha',
    'id' => 'senha',
    'placeholder' => 'Senha',
    'class' => 'input-xxlarge'
));

echo '<div class="fix"></div>';

echo anchor('admin/usuario/cadastro', 'Novo Usuário', array(
    'class' => 'btn btn-large disabled btn-novo'
));

echo form_submit(array(
    'value' => 'Logar',
    'class' => 'btn btn-primary btn-large btn-logar'
));

echo form_close();

if ($erro) {
    echo '<div class="errors">' .$erro. '</div>';
}

?>
</div>

</body>
</html>