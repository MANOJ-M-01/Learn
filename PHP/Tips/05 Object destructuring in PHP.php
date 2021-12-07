<?php

// https://stackoverflow.com/questions/28232945/destructuring-assignment-in-php-for-objects-associative-arrays

// Extracting an associative array

$info = [ 'drink' => 'coffee', 'color' => 'brown', 'power' => 'caffeine' ];
extract($info);

var_dump($drink); // string(6) "coffee"
var_dump($color); // string(5) "brown"
var_dump($power); // string(8) "caffeine"


// Extracting an Object
class User {

    public $name = 'Thomas';

}

$user = new User();
extract( get_object_vars($user) );

var_dump($name); 