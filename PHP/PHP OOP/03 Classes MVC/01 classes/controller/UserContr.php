<?php

include dirname(__DIR__,1).DIRECTORY_SEPARATOR.'model/User.php';

class UserContr extends User{

    public function view(){
        $data=$this->viewData();
        return $data;
    }

    public function viewAll(){
        $data=$this->viewAllData();
        return $data;
    }

}