<?php echo heading("Produtos vendidos", 1); ?>

<table class="table">
    <tr>
        <th>ID Produto</th>
        <th>ID Comprador</th>
        <th>Data de entrega</th>
    </tr>
    <?php foreach ($vendidos as $vendido) : ?>
        <tr>
            <td><?= anchor("produtos/{$vendido->produto_id}", $vendido->produto_id); ?></td>
            <td><?= anchor("usuarios/{$vendido->comprador_id}", $vendido->comprador_id); ?></td>
            <td><?= $vendido->data_de_entrega; ?></td>
        </tr>
    <?php endforeach; ?>
</table>