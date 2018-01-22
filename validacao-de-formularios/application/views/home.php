<?php $this->load->view('commons/header'); ?>

<div class="container">
    <div class="page-header">
    <h2>Fale Conosco</h2>
    </div>

    <div class="row">
        <div class="col-md-8">
            <form action="<?=base_url('home')?>" method="POST" class="form-horizontal">
    
                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Nome</label>
                    <div class="col-md-8">
                        <input id="nome" name="nome" type="text" placeholder="Nome" required="" class="form-control input-md">
                    </div>
                </div>

        <div class="form-group">
            <label for="email" class="col-md-2 control-label">Email</label>
            <div class="col-md-8">
                <input id="email" name="email" placeholder="Email"  required="" type="text" class="form-control input-md">
                <span class="help-block">Ex.: email@exemple.com</span>
            </div>
        </div>

        <div class="form-group">
            <label for="assunto" class="col-md-2 control-label">Assunto</label>
            <div class="col-md-8">
                <input type="text" id="assunto" name="assunto" placeholder="Assunto" required="" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label for="mensagem" class="col-md-2 control-label">Mensagem</label>
            <div class="col-md-8">
                <textarea name="mensagem" id="mensagem" rows="10" placeholder="Mensagem" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10">
                <input type="submit" value="Enviar" class="btn btn-default pull-right">
            </div>
        </div>


            </form>
        </div>
    </div>

</div>

<?php $this->load->view('commons/footer'); ?>