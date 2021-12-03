<?php
require_once './controller/Login.php'; 

$Login=new Login(); 

if($Login->logout()){
    header('location:index.php');
    exit(); 
}