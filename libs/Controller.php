<?php

class Controller
{
    public function render($view, $data = '') {
        require ('views/'.$view.'.php');
    }
}