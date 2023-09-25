<?php
//logical operators
$x= 10; $y =40;
if ($x * 3> $y == 40){
    echo "Nope";
} elseif ($y < 50 || $x > 10){
    echo "Yep";
} else if ($x * 2 < $y) {
    echo "Nope";
}