<a href="02 param routing.php">Home</a><br />
<a href="02 param routing.php?/form">Form</a><br />
<a href="02 param routing.php?/form/page">Page</a><br />
<a href="02 param routing.php?/other">Others</a><br /><br />

<?php

if(isset($_GET)){
	$routeLength=count($_GET);
	if($routeLength==1){
		$routes=array_keys($_GET)[0];
		$route=explode("/",$routes);

		echo "<pre>";
		print_r($routes);
		echo "</pre>";

		if(isset($route[1]) && $route[1]=='form'){
			if(isset($route[2]) && $route[1]=='page'){
				echo '<h1>Pages</h1>';
			}else{
				echo '<h1>Home</h1>';
			}
		}else{
			echo '<h1>404</h1>';
		}
	}
}
?>
