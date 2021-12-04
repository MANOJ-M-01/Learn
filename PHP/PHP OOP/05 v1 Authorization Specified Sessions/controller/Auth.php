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
        
        if(isset($this->session['userid'])){
            $this->ID=$this->session['userid'];
        }
        if(isset($this->session['username'])){
            $this->UserName=$this->session['username'];
        } 
        if(isset($this->session['usermail'])){
            $this->Mail=$this->session['usermail'];
        } 
        if(isset($this->session['role'])){
            $this->Role=$this->session['role'];
        } 
        if(isset($this->session['level'])){
            $this->Level=$this->session['level'];
        } 
        if(isset($this->session['phone'])){
            $this->Phone=$this->session['phone'];
        }
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
    *
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