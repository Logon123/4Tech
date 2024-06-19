<?php

// set up php ini setting
ini_set("SMTP", "smtp.rediffmail.com");
ini_set("smtp_port", "587");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email content
    $to = 'logon12@rediffmai.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<h2>Thank you for your message!</h2>';
        echo '<p>We will get back to you shortly.</p>';
    } else {
        echo '<h2>Sorry, there was an error sending your message.</h2>';
       
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    
    exit;
}
?>
