<?php
 
namespace General;

// anonymous class
// https://stackoverflow.com/questions/42054265/can-i-call-a-static-function-from-a-trait-outside-of-a-class


trait General{

    public function timenow(){
        date_default_timezone_set("Asia/Kolkata");
        $time=date('Y-m-d H:i:s');
        return $time;
    }

    public function redirect($link){
        header('location:'.$link);
        exit();
    }

    /*
    *
    *   @param $data
    *   @data is an array
    *   @return empty array return false
    */
    public function isEmpty($data){
        $len=count($data);
        $checked=[];
        if($len>0){
            for($i=0;$i<$len;$i++){
                $filterval = preg_replace('/\s+/','', $data[$i]);
                if(empty($filterval) && $filterval!=0 || strlen($filterval)==0){
                    $checked[]=true;
                }else{
                    $checked[]=false;
                }
            }
            if(in_array(true,$checked)){
                return true;
            } 
            return false;
        }else{
            return true;
        }
    }

}


$a="0"; // false
$b="sd"; // false
$c="    ";  // true

$IsEmpty=(new class { use General; })->isEmpty([$a,$b,$c]);
$TimeNow=(new class { use General; })->timenow();

var_dump($IsEmpty); // boolean
var_dump($TimeNow);