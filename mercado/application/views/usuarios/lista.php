<?php 

echo isset($aviso) ? "<div class='alert alert-success alert-heading'>" .$aviso. "</div>": '';

echo heading("Usuários", 1); 
?>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <?php foreach($usuarios as $usuario) : ?>
        <tr>
            <td><?= $usuario->nome; ?></td>
            <td><?= $usuario->email; ?></td>
        </tr>
    <?php endforeach; ?>

</table>