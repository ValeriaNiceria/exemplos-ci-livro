<?php $this->load->view('commons/header'); ?>

<div class="container">
    <div class="page-header">
        <h1>Trabalhe Conosco</h1>
    </div>
    <div class="row">
        <div class="col-md-8">

        <!--Exibir a mensagem-->
            <?php if ($formErrors) : ?>
                <div class="alert alert-danger">
                    <?=$formErrors?>
                </div>
            <?php elseif ($this->session->flashdata('success_msg')) : ?>
                <div class="alert alert-success">
                    <?=$this->session->flashdata('success_msg')?>
                </div>
            <?php endif; ?>

            <?=form_open_multipart(base_url('trabalhe-conosco'), array("class"=>"form-horizontal","method"=>"POST")); ?>
             
                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Nome</label>
                    <div class="col-md-8">
                        <?=form_input(array("name"=>"nome", "id"=>"nome"), set_value('nome'), array("class"=>"form-control input-md", "required"=>"", "type"=>"text", "placeholder"=>"Nome")); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-2 control-label">Email</label>
                    <div class="col-md-8">
                        <?=form_input(array("name"=>"email", "id"=>"email"), set_value('email'), array("class"=>"form-control input-md", "required"=>"", "type"=>"text", "placeholder"=>"Email")); ?>
                        <span class="help-block">Ex.: email@exemple.com</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="telefone" class="col-md-2 control-label">Telefone de Contato</label>
                    <div class="col-md-8">
                        <?=form_input(array("name"=>"telefone", "id"=>"telefone"), set_value('telefone'), array("class"=>"form-control input-md", "required"=>"", "type"=>"text", "placeholder"=>"Telefone de Contato")); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mensagem" class="col-md-2 control-label">Mensagem</label>
                    <div class="col-md-8">
                        <?=form_textarea(array("name"=>"mensagem", "id"=>"mensagem"), set_value('mensagem'), array("class"=>"form-control", "rows"=>"10", "placeholder"=>"Mensagem"));?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="curriculo" class="col-md-2 control-label">Currículo</label>
                    <div class="col-md-8">
                        <?=form_upload(array("name"=>"curriculo", "id"=>"curriculo"), set_value('curriculo'), array("class"=>"input-file", "required"=>""));?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-10">
                        <?=form_submit(array("name"=>"Enviar", "id"=>"Enviar"), "Enviar", array("class"=>"btn btn-default pull-right"));?>
                    </div>
                </div>

            <?=form_close(); ?>
        </div>

        <div class="col-md-4">
            <h4>Telefones</h4>
            <p>+55 99 9999-9999 | +55 88 8888-8888</p>
            <hr/>
            <h4>E-mail</h4>
            <p>contato@empresa.com.br</p>
            <hr/>
            <h4>Endereço</h4>
            <p>R. Quinze de Novembro - Praia da Costa, Vila Velha - ES</p>
            <hr/>
            <div class="embed-responsive embed-responsive-4by3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.158747806409!2d-40.28834304992956!3d-20.33505958631135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb8163812c6b305%3A0xe71db7e3d9c94285!2sR.+Quinze+de+Novembro%2C+Vila+Velha+-+ES!5e0!3m2!1spt-BR!2sbr!4v1516221549298" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('commons/footer'); ?>

