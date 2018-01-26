<?php

foreach($filmes_encontrados as $filme) :
    
    echo '<div class="lista_filmes_inicio">';
    echo ucwords(heading($filme->filme_nome, 3)); //ucwords->Primeira letra maiúscula ** heading->substitui o h3
    echo "<p>" . $filme->filme_descricao . "</p>";
    echo '</div>';

endforeach;

echo $paginacao_filmes;

?>