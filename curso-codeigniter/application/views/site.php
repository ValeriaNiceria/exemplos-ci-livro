<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
</head>
<body>

<div id="container">

	<a href="<?php echo base_url(); ?>">Home</a>
	<a href="<?php echo base_url('sobre'); ?>">Sobre</a>
	<a href="<?php echo base_url('contato'); ?>">Contato</a>

	<h1>Bem vindo ao CodeIgniter!</h1>

	<div class="container">
		<?php $this->load->view($view); ?>
	</div>


</div>

</body>
</html>