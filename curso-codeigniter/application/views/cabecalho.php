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
	<div class="busca">
		<?php
			echo form_open('busca/filme', array('method' => 'get'));
			echo form_input(array(
				'name' => 'busca',
				'id' => 'busca',
				'class' => 'input-medium search-query',
				'placeholder' => 'Buscar Filme'
			));
			echo form_submit(array(
				'value' => 'Buscar',
				'class' => 'btn btn-primary'
			));
			echo form_close();
		?>
	</div>
	<div class="menu">
		<?php echo anchor('./', 'Home');?> 
		<?php echo anchor('cadastro', 'Cadastro'); ?>
		<?php echo anchor('contato', 'Contato'); ?>
	</div>

	<?php
		if ($this->session->userdata('logado')) {
			echo '<div class="logout">';
			echo anchor('admin/logout', 'Logout');
			echo '</div>';
		}
	?>

	
