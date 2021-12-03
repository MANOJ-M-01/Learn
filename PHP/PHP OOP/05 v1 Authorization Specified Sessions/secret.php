<?php 
require_once './controller/Auth.php';
 
$Auth=new Auth();

/*
* checks if user is logged in
*/
if(!$Auth->isLoggedIn()){
    header('location:index.php?res=not logged in');
    exit();
}

/*
* checks if current role have access to this page
*/
$AuthCheck=$Auth->hasRole('role',['ADMIN','WORKER']);

if(!$AuthCheck){
    header('location:index.php?res=not authorized');
    exit();
}

$ID=$Auth->ID;
$UserName=$Auth->UserName;
$Mail=$Auth->Mail;
$Role=$Auth->Role;
$Level=$Auth->Level;
$Phone=$Auth->Phone;
 
echo $ID."<br>";
echo $UserName."<br>";
echo $Mail."<br>";
echo $Role."<br>";
echo $Level."<br>";
echo $Phone."<br>";

echo '<br/><br/><a href="logout.php">Logout</a>';