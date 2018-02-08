<?php echo heading('Filmes encontrados', 1); ?> <!-- Substitui o 'h(1..6)' -->

<?php

foreach($filmes_encontrados as $filme) :
    
    echo '<div class="lista_filmes_inicio">';
    echo ucwords(heading($filme->filme_nome, 3)); //ucwords->Primeira letra maiúscula ** heading->substitui o h3
    echo img($filme->filme_thumb);
    echo "<p>" . word_limiter($filme->filme_descricao, 20) . "</p>";
    echo '</div>';

endforeach;

echo $paginacao_filmes;

?>