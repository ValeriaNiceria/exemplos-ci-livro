<?php if ($this->router->fetch_class() == 'Institucional' && $this->router->fetch_method() == 'index') : ?>
    <ul class="nav masthead-nav">
<?php else : ?>
    <ul class="nav navbar-nav">
<?php endif; ?>


    <li class="<?=($this->router->fetch_class() == 'Institucional' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>">
        <a href="<?=base_url() ?>">Home</a>
    </li>
    <li class="<?=($this->router->fetch_class() == 'Institucional' && $this->router->fetch_method() == 'Empresa') ? 'active' : null; ?>">
        <a href="<?=base_url('index.php/Institucional/empresa') ?>">A Empresa</a>
    </li>
    <li class="<?=($this->router->fetch_class() == 'Institucional' && $this->router->fetch_method() == 'Servicos') ? 'active' : null; ?>">
        <a href="<?=base_url('index.php/Institucional/servicos') ?>">Serviços</a>
    </li>
    <li class="<?=($this->router->fetch_class() == 'Contato' && $this->router->fetch_method() == 'TrabalheConosco') ? 'active' : null; ?>">
        <a href="<?=base_url('index.php/Contato/trabalheconosco') ?>">Trabalhe Conosco</a>
    </li>
    <li class="<?=($this->router->fetch_class() == 'Contato' && $this->router->fetch_method() == 'FaleConosco') ? 'active' : null;?>">
        <a href="<?=base_url('index.php/Contato/faleconosco') ?>">Fale Conosco</a>
    </li>
</ul>
