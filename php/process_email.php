<?php

    $email_subject = "New Form submission";
    $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

    $to = "yourname@yourwebsite.com";
    $headers = "From: $email \r\n";

    mail("jomi@jomibitancor.com", $email_subject, $email_body, $headers);
?>
