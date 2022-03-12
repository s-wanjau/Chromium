<?php
@include 'config.php';

if(isset($_POST['submit']));{
    $firstName = $_POST['firstName'];
    $emailAddress = $_POST['emailAddress'];
    $feedback = $_POST['feedback'];

    $mailTo = "swanjau12@gmail.com";
    $headers = "FROM: ".$emailAddress;
    $txt = "You have received an email from ".$firstName.".\n\n".$feedback;


    mail($mailTo,$feedback,$txt,$headers);
    header("location: index.php?mailsend");

}



