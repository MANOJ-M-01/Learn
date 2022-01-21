<?php 

define('BASE_PATH', realpath(dirname(__FILE__)));
function my_autoloader($class)
{
    $filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php'; 
    if(file_exists($filename)) {
        require_once $filename;
    }else{
        var_dump($filename);
        echo "file not exist";
        exit();
    }
}

spl_autoload_register('my_autoloader');