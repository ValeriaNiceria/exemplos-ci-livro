<?php echo heading("Meus Produtos", 1); ?>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
    </tr>
    <?php foreach ($produtos as $produto) : ?>
        <tr>
            <td><?= anchor("produtos/{$produto->id}", $produto->nome ); ?></td>
            <td><?= $produto->preco; ?></td>
            <td><?= character_limiter($produto->descricao, 10); ?></td>
        </tr>
    <?php endforeach; ?>
</table>