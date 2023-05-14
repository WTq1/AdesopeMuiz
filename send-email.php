<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate form data (perform necessary checks)
    
    // Set up email parameters
    $to = 'webtdigitals@gmail.com'; // Your email address
    $subject = 'New contact form submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    // Send email
    $mailSent = mail($to, $subject, $body, $headers);
    
    // Check if the email was sent successfully
    if ($mailSent) {
        // Redirect the user to a success page
        header('Location: success.html');
        exit();
    } else {
        // Redirect the user to an error page
        header('Location: error.html');
        exit();
    }
} else {
    // Handle the case where the form was not submitted
    // Redirect the user back to the contact page or show an error message
    header('Location: contact.html');
    exit();
}
?>
