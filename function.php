<?php
// php functions
function greet(){
    echo "Good morning";
}
greet();
greet();
for ($i= 0; $i<1000; $i++){
    greet($i);
}

function greet_person($person)
{
    echo "<h4>Good day $person, how are you?</h4>";
}
$name = "Black";
greet_person ($name);

function abuse_person($name)
{
    echo "<h4> $name shey your head correct?</h4>";
}
$name = "Deji";
abuse_person($name);

function bigger($num1, $num2)
{
    if ($num1 > $num2){
        echo "<h1>$num1</h1>";
    }else {
        echo "<h1>$num2</h1>";
    }
}
bigger(40,92);

function smaller($x, $y)
{
    if ($x< $y){
        return $x;
    } else {
        return $y;
    }
}
$ans = smaller (5, 6);
echo $ans;