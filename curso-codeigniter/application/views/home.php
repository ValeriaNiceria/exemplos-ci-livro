<?php

echo '<div class="fix"></div>';

echo heading('Filmes', 1); //Substitui o 'h(1..6)'

echo '<ul class="thumbnails">';
foreach($filmes_encontrados as $filme) :
echo '<li class="span4 lista_filmes_inicio">';
echo '<div class="thumbnail">';
echo img(array('class' => 'img-polaroid', 'src' => $filme->filme_thumb));
echo ucwords(heading($filme->filme_nome, 3));
echo '<p>' . word_limiter($filme->filme_descricao, 20) . '</p>';
echo anchor('filme/descricao', 'ver mais', array('class'=>'btn btn-info btn-block')); 
echo '</div>';
echo '</li>';
endforeach;
echo '</ul>';

echo '<div class="paginacao">';
echo $paginacao_filmes;
echo '</div>';


?>