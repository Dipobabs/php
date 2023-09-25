<?php
$name = "Olu";
$names = array ("Ola", "Oyin","Oye", $name);
echo $names[0] . " is a duck <br/>";
//echo $name[3]. "is my friend";

//greet everybody
foreach ($names as $person) {
    echo "Good morning " . $person . "<br/>";
}

?>