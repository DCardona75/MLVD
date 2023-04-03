<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

 
    // recipient email address
    $to = "contact@iglesialavozdediosinc.org";

    
    // Do something with the data, such as sending an email
    mail($to, "Message from $name", $message, $email,$tel);

    echo 'Form submitted successfully!';
}

?>