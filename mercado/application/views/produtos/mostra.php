<div class="container">
<?php echo heading(html_escape(ucwords($produto["nome"])), 1); ?>

<p><strong>Preço:</strong> 
<?= numeroEmReais($produto["preco"]);?>
</p>

<p><strong>Descrição:</strong>
<?= auto_typography(html_escape($produto['descricao'])); ?>
</p>

<?php 
if (!$produto['vendido']) :

    echo '<hr/>';

    echo heading("Compre agora mesmo!", 2); 

    echo form_open("vendas/nova");
    
    echo form_hidden("produto_id", $produto['id']);
    
    echo form_label("Data de entrega:", "data_de_entrega");
    echo form_input(array(
        'name' => 'data_de_entrega',
        'id' => 'data_de_entrega',
        'class' => 'form-control',
        'type' => 'date'
    ));
    
    echo form_button(array(
        'content' => 'Comprar',
        'type' => 'submit',
        'class' => 'btn btn-primary float-right mt-2'
    ));
    
    echo form_close();        
endif;
?>


</div>