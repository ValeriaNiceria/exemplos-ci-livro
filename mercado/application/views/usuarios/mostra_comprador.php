<div class="container">

<?php echo heading('Dados comprador', 1); ?>

<p><strong>Nome:</strong>
<?= ucwords($comprador['nome']); ?>
</p>

<p><strong>E-mail:</strong>
<?= $comprador['email']; ?>
</p>

</div>