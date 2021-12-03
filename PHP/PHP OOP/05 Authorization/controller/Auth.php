<?php
class Auth{

    private $session;

    public function __construct(){
        session_start();
        $this->session=$_SESSION;
    }

    public function AuthData($session_val){
        if(isset($this->session[$session_val])){
            $res=$this->session[$session_val];
        }else{
            $res=false;
        }
        return $res;
    }

    public function hasRole($field,$conditions){
        if(isset($this->session[$field])){
            $data=$this->session[$field];
            $roleLenght=count($conditions);
            $verify=[];
            if($roleLenght>0){
                for($i=0;$i<$roleLenght;$i++){
                    $condition=$conditions[$i];
                    if($data==$condition){
                        $Granted=true;
                    }else{
                        $Granted=false;
                    }
                    $verify[]=$Granted;
                }
                if(in_array(true,$verify)){
                    $Access=true;
                }else{
                    $Access=false;
                }
                $res=$Access;
            }else{
                $res=null;
            }
        }else{
            $res=null;
        }
        return $res;
    }

}