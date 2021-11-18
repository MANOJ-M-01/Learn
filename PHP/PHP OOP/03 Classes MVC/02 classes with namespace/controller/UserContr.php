<?php
namespace UserController;
include dirname(__DIR__,1).DIRECTORY_SEPARATOR.'model/User.php';
use UserModel;

class UserContr extends UserModel\User{

    public function view(){
        $data=$this->viewData();
        return $data;
    }

    public function viewAll(){
        $data=$this->viewAllData();
        return $data;
    }

}