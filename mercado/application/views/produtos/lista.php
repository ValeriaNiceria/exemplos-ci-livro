<?php echo heading('Produtos', 1); ?>
<table class="table">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
    </tr>
      
    <?php foreach ($produtos as $produto) : ?>
    <tr>
        <td><?= $produto->nome; ?></td>
        <td><?= $produto->descricao; ?></td>
        <td><?= numeroEmReais($produto->preco); ?></td>
    </tr>
    <?php endforeach; ?>
</table>