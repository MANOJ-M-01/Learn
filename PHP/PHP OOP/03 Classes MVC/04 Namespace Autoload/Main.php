<?php 
include('autoload.php');

use Teacher\Teacher;
use Student\Student;

$sd = new Teacher();
$ob=new Student();

var_dump($sd->TName());
var_dump($ob->Name());