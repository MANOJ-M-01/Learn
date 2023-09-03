<?php
$id=filter_input(INPUT_POST,'id',FILTER_VALIDATE_INT);
$name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);

$data = json_decode(file_get_contents('php://input'), true);
//var_dump($data);

$a=[$id,$name,json_encode($data)];
echo json_encode($a);

?>
