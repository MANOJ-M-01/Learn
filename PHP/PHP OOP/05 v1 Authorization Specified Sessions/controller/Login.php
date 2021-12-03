<?php
class Login{

    public function __construct(){
        session_start();
    }

    public function start(){
        $_SESSION['userid']=101;
        $_SESSION['username']='Manoj';
        $_SESSION['usermail']='manoj904378@gmail.com';
        $_SESSION['role']='ADMIN';
        $_SESSION['level']=1;
        $_SESSION['phone']=90437878;
        $res=true;
        return $res;
    }

    public function logout(){
        session_unset();
        session_destroy();
        $res=true;
        return $res;
    }

}