<style>
    .box{
        width:70px;
        height:70px;
        border:1px solid black;
        border-radius: 50%;
        line-height:70px;
        text-align: center;
        display:inline-block;
        margin: 2px;
        margin-top:5px;
        Vertical-align:middle;
        color:white;

    }
    .blue{
        background: blue;
     }
    .maroon{
        background: maroon;
    }
</style>
<?php
$i = 0;
while($i <= 100){
?>
    <div class="box <?php echo $i % 2==0 ? 'blue' :'maroon'?>">
    <?=$i ?>
</div>
<?php
    $i =$i +1;
}