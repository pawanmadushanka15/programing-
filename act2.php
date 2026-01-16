<?php
$length = 5;
echo "The area is:".findArea($length);

function findArea($length){
    $area = $length*$length;
    return $area;
}

?>