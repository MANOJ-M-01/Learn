<?php

Class Request{ 
  public function __construct($datas){
    foreach($datas as $data){
      $property=$data[0][0];
      $this->$property=$data[1][0];
    }
    return $this;
  }
}


$req=new Request([[["Name"],["Ram"]],[["Age"],["14"]]]);


Class User{
  public function store(Request $request){
    return $request->Name;
  }
}


$store=new User();
$data=$store->store($req); 

var_dump($data);

?>