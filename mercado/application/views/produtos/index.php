<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <?php echo link_tag('public/css/bootstrap.css'); ?>
</head>
<body>
    
    <div class="container">

        <?php $this->load->view("produtos/lista"); ?>

        <?php $this->load->view("produtos/cadastro_usuario"); ?>

    </div>

</body>
</html>