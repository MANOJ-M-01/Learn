<?php
require_once 'vendor/autoload.php';
require_once 'autoload.php';

Mustache_Autoloader::register();

$templates = new Templates();
$page = $templates->getPageURL();
$data = $templates->data($page);
 

if($page=='/contact' and $_SERVER["REQUEST_METHOD"]=='POST'){
$data['name']=$_POST['name'];
}
echo $templates->render($page, $data);