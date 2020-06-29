<?php

class Controller{
    protected $view;

    public function render(){

        $pathView="./Views/".$this->view.".php";
          ob_start();
          require_once($pathView);
    }
}

