<?php
// if statements
$x= 7;
$y= 3;
$z= 7.0;
if ($x> $y){
    echo "great <br/>";
}
if ($z === $x){
    echo "You cant see me";
}else{
    echo "it is wrong ";
}
/*echo "<br/>";
if ($x !== $y){
    echo "I dey here";
}*/
echo "scot";
$dc =12;
if ($dc > $x + $z) {
    ?>
    <div style="height: 100px; width: 100px;
            border-radius: 50%; background-color: orange;
            line-height:100px; color: #fff; text-align: center;">
             Orange balls
    </div>
<?php
} else {
?>    
    <div style="height: 100px; width: 100px;
            border-radius: 50%; background-color: blue;
            line-height:100px; color: #fff; text-align: center;"> 
            blue balls
    </div>
<?php    
}