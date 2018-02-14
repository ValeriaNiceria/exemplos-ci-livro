<?php

echo img(array('src' => $filme_encontrado['filme_foto'], 'class' => 'img-rounded img-polaroid'));
echo heading($filme_encontrado['filme_nome'], 2);
echo '<p><strong>Preço:</strong></p';
echo '<p>' .$filme_encontrado['filme_preco']. '</p>';
echo '<p><strong>Detalhes:</strong></p>';
echo '<p class="detalhe">' .$filme_encontrado['filme_descricao']. '</p>';


echo heading('Quantidade:', 5);

echo form_open('cart');
echo form_hidden('id', $filme_encontrado['id']);
echo form_input(array(
	'name' => 'qtd',
	'id' => 'qtd',
	'type' => 'number',
	'class' => 'input-medium',
	'placeholder' => 'Quantidade',
	'min' => '1'
));
echo form_button(array(
	'content' => 'Adicionar',
	'type' => 'submit',
	'class' => 'btn btn-primary btn-large'
));
echo form_close();