<?php
    $to = "krishag1016@gmail.com";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers  = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if(mail($to, $subject, $fullMessage, $headers)){
        echo "sent";
    } else {
        echo "failed";
    }
?>
