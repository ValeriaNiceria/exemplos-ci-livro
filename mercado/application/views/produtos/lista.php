<?php 

echo isset($aviso) ? "<div class='alert alert-success alert-heading'>" .$aviso. "</div>" : '';

echo heading('Produtos', 1);
?>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
    </tr>
      
    <?php foreach ($produtos as $produto) : ?>
    <tr>
        <td><?= anchor("produtos/{$produto->id}", html_escape($produto->nome)); ?></td>
        <td><?= character_limiter(html_escape($produto->descricao), 10); ?></td>
        <td><?= numeroEmReais($produto->preco); ?></td>
    </tr>
    <?php endforeach; ?>
</table>