<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title; ?></title>
    <?php echo link_tag('public/css/bootstrap.css'); ?>
    <?php echo link_tag('public/css/site.css'); ?>
</head>
<body>
    
    <div class="container">
        <div class="menu">
            <?php echo anchor("mercado", "Home"); ?>
            <?php echo anchor("produtos/lista", "Lista Produtos"); ?>
            <?php echo anchor("usuarios/lista", "Lista Usuários"); ?>
            <?php echo anchor("produtos/formulario_cadastro", "Cadastro Produto"); ?>
            <?php echo anchor("usuarios/formulario_cadastro", "Cadastro Usuário"); ?>
        </div>

        <div class="container">
            <?php $this->load->view($view); ?>
        </div> 

    </div>

</body>
</html>