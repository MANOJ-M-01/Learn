<?php 
header('Content-Type: application/json');

include dirname(__DIR__,1).DIRECTORY_SEPARATOR.'controller/UserContr.php';

use UserModel\User;
use UserController\UserContr;

    $Users=new \UserController\UserContr();

    $data=$Users->view();
    $data=$Users->viewAll();
    echo(json_encode($data));
?>