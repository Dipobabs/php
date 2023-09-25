<?php
$i = 0;
while ($i < 20) {
    $i= $i + 2;
    echo "$i";
}
echo "<br/>";
for ($i=2; $i<=20; $i = $i+2){
    echo "$i";
}
echo "<br/>";
for ($i = 2; $i<=20; $i++){
    if ($i % 2 == 0){
        echo "$i";
    }
}
