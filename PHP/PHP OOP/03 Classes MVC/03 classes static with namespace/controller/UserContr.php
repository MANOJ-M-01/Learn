<?php
namespace UserController;
include dirname(__DIR__,1).DIRECTORY_SEPARATOR.'model/User.php';
use UserModel;

class UserContr extends UserModel\User{

    public static function view(){
        $data=parent::viewData();
        return $data;
    }

    public static function viewAll(){
        $data=parent::viewAllData();
        return $data;
    }

}