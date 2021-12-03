<?php

    function isLoggedIn($a){
        if($a==4){
            return true;
        }
        return false;
    }

    $data=isLoggedIn(4);
    var_dump($data);

/*
* else not required for this operation
*/