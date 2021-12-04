<?php
class Auth{

    private $session;
    public $ID;
    public $UserName;
    public $Mail;
    public $Role;
    public $Level;
    public $Phone;

    public function __construct(){
        session_start();
        $this->session=$_SESSION;
        $this->ID=$_SESSION['userid'];
        $this->UserName=$_SESSION['username'];
        $this->Mail=$_SESSION['usermail'];
        $this->Role=$_SESSION['role'];
        $this->Level=$_SESSION['level'];
        $this->Phone=$_SESSION['phone'];
    }

    public function isLoggedIn(){
        if(isset($this->session['userid'])){
            return true;
        }
        return false;
    }

    /* 
    *   first column name, second list of athorized roles 
    *   checks user role and returns boolean
    *   if second parameter is empty, returns true then all roles are authorized
    */

    public function hasRole($field,$conditions){
        if(isset($this->session[$field])){
            $data=$this->session[$field];
            $roleLenght=count($conditions);
            $verify=[];
            if($roleLenght>0){
                for($i=0;$i<$roleLenght;$i++){
                    $condition=$conditions[$i];
                    if($data==$condition){
                        $verify[]=true;
                    }else{
                        $verify[]=false;
                    }
                }
                if(in_array(true,$verify)){
                    return true;
                }
                return false;
            }
        }
        return true;
    }

}