<?php
$a =84;
$b =$a/9;
if ($b> $a){
    echo $a+1;
} elseif ($a> $b * 2){
    echo $b * 2;
} else{
    echo 2;
}
echo "<br/>";
// example 2
$h = date("H");
if ($h < "10"){
    echo "Goodmorning";
}elseif ($h <"20"){
    echo "Good afternoon!";
}else if ($h< "23"){
    echo "goodnight";
}else{
    echo "Good night";
}
echo "<br/>";