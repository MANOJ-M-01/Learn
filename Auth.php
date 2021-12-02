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

            for($i=0;$i<$roleLenght;$i++){
                $condition=$conditions[$i];
                if (in_array($data,$conditions))
                {
                echo "Match found";
                }
                    else
                {
                echo "Match not found";
                }
            }
            var_dump($res);
            exit();

 
        }else{
            $res=null;
        }
        return $res;
    }

    public function start(){ 
        $_SESSION['userid']=101;
        $_SESSION['username']='Manoj';
        $_SESSION['usermail']='manoj@gmail.com';
        $_SESSION['role']='ADMIN';
        $_SESSION['level']=1;
        $_SESSION['phone']=9043780671;
    }

    public function logout(){
        session_unset();
        session_destroy();
    }


}

$obj=new Auth();
// $datas=$obj->start();
$AuthCheck=$obj->hasRole('role',['sdsd','ADMIN','WORKER']); 
var_dump($AuthCheck);
exit();
if($AuthCheck==false){
    // header('location:4.php');
    // exit();
    echo "redirect";
}

$FieldExist=$obj->AuthData('usermail');

// //$datas=$obj->logout();

if($FieldExist){
    var_dump($FieldExist);
}

