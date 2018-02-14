<?php

class MY_Email extends CI_Email {

    private $config = array();

    public function __construct() {
        parent::__construct();
    }

    public function setConfiguration() {

        $this->config['protocol'] = 'sendmail';
        $this->config['smtp_host'] = 'smtp.gmail.com';
        $this->config['smtp_user'] = 'valerianiceria@gmail.com';
        $this->config['smtp_pass'] = '**password**';
        $this->config['smtp_port'] = 465;
        $this->config['wordwrap'] = TRUE;
        $this->config['charset'] = 'utf-8';
        $this->config['mailtype'] = 'html';

        return $this->config;
    }

}