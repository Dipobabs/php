<?php 
    $password= 'dipobabs2';
    $hash = hash('sha256', $password,);

    echo "<h1>$hash</h1>";

?>