<?php

class Migration_Cria_tabela_de_vendas extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => true
            ),
            'produto_id' => array(
                'type' => 'INT'
            ),
            'comprador_id' => array(
                'type' => 'INT'
            ),
            'data_de_entrega' => array(
                'type' => 'DATE'
            )
        ));

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('vendas');
    }

    public function down()
    {
        $this->dbforge->drop_table('vendas');
    }
}