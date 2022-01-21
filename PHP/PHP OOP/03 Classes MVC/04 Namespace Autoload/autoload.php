<?php 

define('BASE_PATH', realpath(dirname(__FILE__)));
function my_autoloader($class)
{
    $filename = BASE_PATH . '/lib/' . str_replace('\\', '/', $class) . '.php';
    include($filename);
    // if(file_exists($file)) {
    //     require_once $file;
    // }
}

spl_autoload_register('my_autoloader');