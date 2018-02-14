<?php

echo '<div class="fix"></div>';

echo heading('Filmes encontrados', 1); //Substitui o 'h(1..6)'

echo '<ul class="thumbnails">';
foreach($filmes_encontrados as $filme) :
echo '<li class="span4 lista_filmes_inicio">';
echo '<div class="thumbnail">';
echo img(array('class' => 'img-polaroid', 'src' => $filme->filme_thumb));
echo ucwords(heading($filme->filme_nome, 3));
echo '<p>' . word_limiter($filme->filme_descricao, 20) . '</p>';
echo anchor('filme/detalhes/'.$filme->id, 'ver mais', array('class'=>'btn btn-info btn-block')); 

echo heading('Compre agora:', 5);
echo form_open('cart');
echo form_hidden('id', $filme->id);
echo form_input(array(
	'name' => 'qtd',
	'id' => 'qtd',
	'type' => 'number',
	'class' => 'input-medium',
	'placeholder' => 'Quantidade',
	'min' => '1',
	'value' => '1'
));
echo form_button(array(
	'content' => 'Adicionar',
	'type' => 'submit',
	'class' => 'btn btn-primary btn-large'
));
echo form_close();

echo '</div>';
echo '</li>';
endforeach;
echo '</ul>';

echo '<div class="paginacao">';
echo $paginacao_filmes;
echo '</div>';

?>