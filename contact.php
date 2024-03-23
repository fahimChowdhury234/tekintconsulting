<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
// Echo the received form data
echo "Name: $name\n";
echo "Email: $email\n";
echo "Phone: $phone\n";
echo "Message: $message\n";


// Set recipient email address
$to = "fahimmuntacir234@gmail.com";

// Set email subject
$subject = "New Contact Form Submission";

// Compose the email message
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Message: $message\n";

// Send email
$mailSent = mail($to, $subject, $body);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully";
} else {
    echo "Failed to send email";
}
