<?php 
header('Content-Type: application/json');

include dirname(__DIR__,1).DIRECTORY_SEPARATOR.'controller/UserContr.php';
    
    $Users=new UserContr();

    $data=$Users->view();
    $data=$Users->viewAll();
    echo(json_encode($data));
?>