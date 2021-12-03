<?php

if(isset($_GET)){
$route=array_keys($_GET)[0];
$routes=explode("/",$route);
echo "<pre>";
print_r($routes);
echo "</pre>";
if($routes[1]=="products"){
	echo "include products";
}
}
?>
<a href="index.php?/form/sdsd">get</a>