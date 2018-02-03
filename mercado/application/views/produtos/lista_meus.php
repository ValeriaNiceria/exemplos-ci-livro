<?php echo heading("Meus Produtos", 1); ?>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
    </tr>
    <?php foreach ($produtos as $produto) : ?>
        <tr>
            <td><?= anchor("produtos/{$produto->id}", html_escape($produto->nome) ); ?></td>
            <td><?= numeroEmReais($produto->preco); ?></td>
            <td><?= character_limiter(html_escape($produto->descricao), 10); ?></td>
        </tr>
    <?php endforeach; ?>
</table>