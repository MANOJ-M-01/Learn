<?php
require_once './controller/Login.php'; 

$Login=new Login(); 

if($Login->start()){
    header('location:secret.php');
    exit(); 
}