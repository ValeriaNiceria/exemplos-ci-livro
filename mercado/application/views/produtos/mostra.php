<div class="container">
<?php echo heading($produto["nome"], 1); ?>

<p><strong>Preço:</strong> 
<?= numeroEmReais($produto["preco"]);?>
</p>

<p><strong>Descrição:</strong>
<?= auto_typography($produto['descricao']); ?>
</p>
</div>