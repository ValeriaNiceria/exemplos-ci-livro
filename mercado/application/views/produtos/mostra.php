<div class="container">
<?php echo heading(html_escape($produto["nome"]), 1); ?>

<p><strong>Preço:</strong> 
<?= numeroEmReais($produto["preco"]);?>
</p>

<p><strong>Descrição:</strong>
<?= auto_typography(html_escape($produto['descricao'])); ?>
</p>
</div>