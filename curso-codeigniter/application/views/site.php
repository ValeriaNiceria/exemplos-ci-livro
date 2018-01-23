<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo link_tag('public/css/site.css'); ?> <!-- Substitui o 'link' -->
</head>
<body>

<div id="container">

	<a href="<?php echo base_url(); ?>">Home</a>
	<a href="<?php echo base_url('sobre'); ?>">Sobre</a>
	<a href="<?php echo base_url('contato'); ?>">Contato</a>

	<h1></h1>

	<?php echo heading('Bem vindo ao CodeIgniter!', 1); ?> <!-- Substitui o 'h(1..6)' -->

	<?php $this->load->view($view); ?>
	
</div>

</body>
</html>