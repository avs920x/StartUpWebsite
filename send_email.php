<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set up the email
    $to = "avs1290@gmail.com"; // Change this to your Gmail account
    $subject = "Message from your website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Your message has been sent!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>