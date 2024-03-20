<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$message = $_POST['message'];

// Echo the received form data
echo "Name: $name\n";
echo "Email: $email\n";
echo "Phone: $phone\n";
echo "Services: $services\n";
echo "Message: $message\n";
