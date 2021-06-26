<?php
$name = $_POST['name'];
$email = $_POST['email'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];

$message = $_POST['message'];
$formcontent=" From: $name \n  $lastname \n Message: $message";
$recipient = "office@aiesec.no";
$mailheader = "From: $email \r\n";
$mail=mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    if($mail) {
        Header('Location: https://aiesec.no/index.html');
            exit();
        } else {
            echo '<p>Something went wrong, please try again</p>'; 
        }
?>