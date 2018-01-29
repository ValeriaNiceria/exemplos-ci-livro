<?php

class MY_Upload extends CI_Upload {
    private $size;
    private $types;
    private $height;
    private $width;
    private $path;
    private $config;

    public function getSize() {
        return $this->size;
    }
    public function setSize($value) {
        $this->size = $value;
    }

    public function getTypes() {
        return $this->types;
    }
    public function setTypes($value) {
        $this->types = $value;
    }

    public function getHeight() {
        return $this->height;
    }
    public function setHeight($value) {
        $this->height = $value;
    }

    public function getWidth() {
        return $this->width;
    }
    public function setWidth($value) {
        $this->width = $value;
    }

    public function getPath() {
        return $this->path;
    }
    public function setPath($value) {
        $this->path = $value;
    }


    public function setConfiguration() {

        $this->config['allowed_types'] = $this->getTypes();
        $this->config['max_size'] = $this->getSize();
        $this->config['max_height'] = $this->getHeight();
        $this->config['max_width'] = $this->getWidth();
        $this->config['upload_path'] = $this->getPath();

        return $this->config;

    }
}