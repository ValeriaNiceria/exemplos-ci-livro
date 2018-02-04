<?php echo heading("Minhas vendas", 1); ?>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Data de entrega</th>
    </tr>
    <?php foreach ($produtosVendidos as $vendido) : ?>
        <tr>
            <td><?= anchor("produtos/{$vendido->id}", html_escape(ucwords($vendido->nome))); ?></td>
            <td><?= $vendido->preco; ?></td>
            <td><?= character_limiter(html_escape($vendido->descricao), 10); ?></td>
            <td><?= traduz_data_para_exibir($vendido->data_de_entrega); ?></td>
        </tr>
    <?php endforeach; ?>
</table>