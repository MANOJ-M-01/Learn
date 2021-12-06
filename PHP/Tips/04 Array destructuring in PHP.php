<?php

/*
    https://stitcher.io/blog/array-destructuring-with-list-in-php
    https://www.phptutorial.net/php-tutorial/php-array-destructuring/
    https://www.php.net/manual/en/migration71.new-features.php
*/
$array1 = array(1, 2, 3);

//method 1
list($a,$b,$c) = $array1;
echo $a,$b,$c; // 1,2,3

//method 2
[$a,$b,$c] = $array1;
echo $a,$b,$c; // 1,2,3


$array2 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
['a'=>$a,'b'=>$b,'c'=>$c]=$array2;
var_dump($a); // int(1) 

?>