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
       <?php if ($this->session->userdata("usuario_logado")) : ?> <!--Só vai aparecer o menu se o usuário estiver logado-->
            <div class="nav">
                <?= anchor("produtos/lista", "Lista Produtos", array("class" => "btn btn-info mt-2 mx-2 mb-3")); ?>
                <?= anchor("usuarios/lista", "Lista Usuários", array("class" => "btn btn-info mt-2 mx-2 mb-3")); ?>
                <?= anchor("produtos/formulario_cadastro", "Novo Produto", array("class" => "btn btn-info mt-2 mx-2 mb-3")); ?>
                <?= anchor("usuarios/formulario_cadastro", "Novo Usuário", array("class" => "btn btn-info mt-2 mx-2 mb-3")); ?>
                <?= anchor("vendas/lista", "Minhas vendas", array("class" => "btn btn-info mt-2 mx-2 mb-3")); ?>
                <?= anchor("mercado/logout", "Logout", array("class" => "btn btn-danger mt-2 mx-2 mb-3")); ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <?php $this->load->view($view); ?>
        </div> 

    </div>

</body>
</html>