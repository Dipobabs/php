<?php
$name = $_GET['name'];
$class = $_GET['class'];
?>
<h1>Welcome <?= $name ?></h1>
<p>Your <?= $class ?> progress is starting </p>

<div style="width:300px">
    <form action="req.php" method="get">
        <fieldset>
            <legend style="color: green">GET REQUEST:</legend>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br /><br>
            <label for="class">Class:</label>
            <input type="text" id="class" name="class"><br /><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</div>