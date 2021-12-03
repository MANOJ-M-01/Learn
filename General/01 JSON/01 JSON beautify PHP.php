<?php

//https://stackoverflow.com/questions/6672656/how-can-i-beautify-json-programmatically/6672713#6672713

// Method 1

$json = '{"status":"0","status_translated":"Request successful!","data":"1"}';
$json_beautified = str_replace(array("{", "}", '","'), array("{<br />&nbsp;&nbsp;&nbsp;&nbsp;", "<br />}", '",<br />&nbsp;&nbsp;&nbsp;&nbsp;"'), $json);

echo $json_beautified;

// Method 2

$data=[["name"=>"Ram","age"=>10],["name"=>"Ram","age"=>10]];

echo "<pre>";
echo json_encode($data, JSON_PRETTY_PRINT);
echo "</pre>";
?>
