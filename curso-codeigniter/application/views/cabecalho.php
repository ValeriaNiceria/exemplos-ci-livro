<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo link_tag('public/css/site.css'); ?> <!-- Substitui o 'link' -->
</head>
<body>

<div id="container">
	<div class="busca">
		<?php
			echo form_open('busca/filme', array('method' => 'get'));
			echo form_label('Buscar filme:', 'busca');
			echo form_input(array(
				'name' => 'busca',
				'id' => 'busca'
			));
			echo form_submit(array(
				'value' => 'Buscar'
			));
			echo form_close();
		?>
	</div>
	<div class="menu">
		<?php echo anchor('./', 'Home'); ?>
		<?php echo anchor('cadastro', 'Cadastro'); ?>
		<?php echo anchor('contato', 'Contato'); ?>
	</div>