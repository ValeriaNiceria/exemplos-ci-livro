<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <?php echo link_tag('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'); ?> 
</head>
<body>
    
    <div class="container">
        <?php echo heading('Produtos', 1); ?>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>

            <?php foreach ($produtos as $produto) : ?>
            <tr>
                <td><?= $produto["nome"]; ?></td>
                <td><?= $produto["descricao"]; ?></td>
                <td><?= $produto["preco"]; ?></td>
            </tr>
            <?php endforeach; ?>

        </table>
    </div>

</body>
</html>