<?php

spl_autoload_register(function($class){
    $filename='./Functions/'.$class.'.php';
    if(!file_exists($filename)){
        return false;
    }

    include_once $filename;
});