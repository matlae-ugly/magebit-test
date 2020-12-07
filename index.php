<?php
error_reporting(E_ERROR | E_PARSE);
require './app_config.php';

//Autoloader
function __autoload($class_name){
    $file = './models/' . $class_name . '.php';
    if(file_exists($file)){
        include $file;
    } else {
        $file = './controllers/' . $class_name . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            $file = './libs/' . $class_name . '.php';
            if (file_exists($file)) {
                include $file;
            }
        }
    }
}

$app = new Bootstrap();
