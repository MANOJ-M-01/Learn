<?php 
include('autoload.php');
 
use controllers\StudentController As Student;
 
$ob=new Student();
 
echo $ob->GetName("Ram");