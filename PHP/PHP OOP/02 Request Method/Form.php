<?php
require_once "./Functions/autoload.php";
require_once "./Functions/Request.php"; 


class User{
  public function store(Request $request){
    $name=$request->name;
    $age=$request->age;
    $out='Name is :'.$name.' And age is :'.$age ;
    return $out;
  }
}


$store=new User();

if(count($_POST)>0) {
    $data=$store->store($request);
    echo json_encode($data);
}else{
  echo json_encode("This is a get method");
}
?>

