<?php 
require_once './controller/Auth.php';
 
$Auth=new Auth();

$AuthCheck=$Auth->hasRole('role',['ADMIN','WORKER']);  //return bool
if($AuthCheck==false || $AuthCheck==NULL){
    header('location:index.php');
    exit();
}

$FieldExist=$Auth->AuthData('usermail');

if($FieldExist){
    echo $FieldExist;
}