<?php
namespace controllers;
use models\Student;

class StudentController{
    public function GetName(){
        $name=Student::name();
        $res="<h1>".$name."</h1>";
        return $res;
    }
}