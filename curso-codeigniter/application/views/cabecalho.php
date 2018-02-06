<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo link_tag('public/css/site.css'); ?> <!-- Substitui o 'link' -->
</head>
<body>

<div id="container">
	<div class="menu">
		<?php echo anchor('./', 'Home'); ?>
		<?php echo anchor('cadastro', 'Cadastro'); ?>
		<?php echo anchor('contato', 'Contato'); ?>
		<?php  echo anchor('sobre','Sobre'); ?>
	</div>