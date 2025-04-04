<?php

#2
$str = 'a1b2c3';

$result = preg_replace_callback(
    '/\d+/', 
    function($matches) {
        $number = (int)$matches[0]; 
        $cube = $number * $number * $number; 
        return $cube; 
    },
    $str
);

echo $result; 

?>