<?php 

class Request{ 
  public function __construct($datas){
    foreach($datas as $name=>$key){ 
      $this->$name=$key;
    }
    return $this;
  }
}


if(count($_POST)>0) { 
    $datas=[];
    foreach ($_POST as $name=>$key) {
        $datas[$name]=$key;
    }

  $request=new Request($datas);
}


$body = file_get_contents('php://input');
$json = json_decode($body, true);  //if it false then data in object. it it true then data in array

if(isset($json)) {
  if(count($json)>0) {
      $datas=[];
      foreach ($json as $name=>$key) {
          $datas[$name]=$key;
      }
      $request=new Request($datas);
  }
}


