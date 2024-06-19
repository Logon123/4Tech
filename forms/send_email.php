<!-- send_email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Set recipient email address (you@yourdomain.com)
    $to = "logon12@rediffmail.com";
    
    // Create email headers
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
    
    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        echo '<p>Your message has been sent successfully. Thank you!</p>';
    } else {
        echo '<p>Something went wrong, please try again!</p>';
    }
} else {
    // Redirect back to contact.html if accessed directly
    header("Location: index.html");
    echo"I Think Error";
    exit();
}
?>
