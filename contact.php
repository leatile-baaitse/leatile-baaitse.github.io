<?php

if (isset($_POST['submit'])) {

    // Collect the form data
    $name = $_POST['#name'];
    $email = $_POST['#email'];
    $phone = $_POST['#phone'];
    $subject = $_POST['#subject'];
    $message = $_POST['#message'];

    // Set the recipient email address
    $to = "lordbaaitse@gmail.com";

    // Create the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Build the email body
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\nMessage:\n$message";

    // Send the email
    if (mail($to, "New Contact Form Submission", $email_body, $headers)) {
        // If the email was sent successfully, redirect to a thank-you page
        header("thankyou.html");
        exit;
    } else {
        // If there was an error sending the email, display an error message
        echo "Error sending email.";
    }
}

?>