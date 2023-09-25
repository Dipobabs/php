<?php
//connect to database fom php
$host = "localhost";
$username ="Pediforte";
$password ="pedifortedb";
$db_name = "contact_form";
$conn = new mysqli ($host, $username, $password, $db_name);

if ($conn-> connect_error) {
    die ("connection to database failed". $conn->connect_error);
} else{
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        //check if name char length is < 5
        if (strlen ($name) < 5){
            echo "Name too short,please enter your real name";
            die();
        }
        $email = $_POST['email'];
        //validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "You submitted an invalid eail address";
            die();
        }
        $phone= $_POST['phone'];
        //validate phone number
        if(strlen($phone)< 11){
            echo "Your number is not correct";
            die();
        }

        $message= $_POST['message'];
        //validate message
        if (strlen($message)< 20){
            echo "Your message is too short";
            die();
        }
        $hashed_password= hash ('sha256', $password);
         $query = "INSERT INTO contact_message (name, email, message, phone) 
        VALUES ('$name', '$email', '$message', '$phone')";
        if ($conn->query($query) === TRUE) {
            $msg_id = $conn->insert_id;
        } else {
            echo "Error: <br/>".$conn->error;
        }
        echo"<p>Message:message </p>";
        echo "<h4>We wud be back to you asap</h4>";

    }else{
        //redirect to the form
        header ('location: contactus.html');
    }

    }
?>
