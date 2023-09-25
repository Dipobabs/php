<?php
$x= 70;
$y= 100;
$ans= $x+$y;
echo $ans;

echo "<br/>";

$color= 'red';

echo "The car is ". $color;
echo "<br>";
echo $ans . $color;
// error ---->echo $ans + $color;
echo "<br/>";

// creating a css box with php value;
$box_width= '300px';
$box_height= '400';
$box_bg= '#48acde';
$box_color= '#000';
?>
<div style ="height:<?php echo $box_height . 'px' ?>;
            width:<?php echo $box_width; ?>;
            background-color:<?php echo $box_bg ?>;
            color: <?=$color ?>; line-height: 400px; text-align: center">
    HELLO WORLD
</div>





