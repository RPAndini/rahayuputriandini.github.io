<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'rahayuputriandiniii@gmail.com';
    $subject = $_POST['subject'];
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Message: " . $_POST['message'] . "\n";
    $headers = 'From: ' . $_POST['email'] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email.';
    }
}
?>
