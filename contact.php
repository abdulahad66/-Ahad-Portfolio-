<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'bondzone0007@gmail.come'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send the email
    if (mail($to, $subject, $body)) {
        echo 'Thank you for your message!';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
}
?>
