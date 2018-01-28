<?php

class MY_Email extends CI_Email {

    private $config = array();

    public function __construct() {
        parent::__construct();
    }

    public function setConfiguration() {

        $this->config['protocol'] = 'smtp';
        $this->config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $this->config['smtp_user'] = 'valerianiceria@gmail.com';
        $this->config['smtp_pass'] = '**password**';
        $this->config['smtp_port'] = 465;
        $this->config['charset'] = 'utf-8';
        $this->config['mailtype'] = 'html';

        return $this->config;
    }

}