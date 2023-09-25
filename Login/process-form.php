<?php
//process post request
//check login
$correct_email= "test@pediforte.com";
$correct_password= "spaghetti";
if (isset ($_POST['email']) and isset($_POST['password'])){
    $email =$_POST ['email'];
    $password =$_POST ['password'];
    if ($email !== $correct_email || $password !== $correct_password){
        echo"<h1 style='color:red'>Invalid login details</h1>";
    }else{
        echo "<h1 style='color:green'>I'm IN</h1>";
        echo "<img src='https://media.tenor.com/wLTK-fVE75UAAAAC/dancingbaby.gif'>";
    }   
} else {
    echo "<h1 style='color: red'> Email and password required </h1>";
}

