<?php
$to_email = "xandercodename@gmail.com";
$subject = "lets test this";
$body = "Hi,lucky This is test email send by PHP Script";
$headers = "From: senders flyboydauda@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent ...";
} else {
    echo "Email sending failed...";
}
?>
