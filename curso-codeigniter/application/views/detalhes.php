<?php

echo img(array('src' => $filme_encontrado['filme_foto'], 'class' => 'img-rounded img-polaroid'));
echo heading($filme_encontrado['filme_nome'], 2);
echo '<p><strong>Detalhes:</strong></p>';
echo '<p class="detalhe">' .$filme_encontrado['filme_descricao']. '</p>';

 