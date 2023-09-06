<?php
// Enable error reporting and display errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Log a message to the error log for debugging purposes
error_log("Processing form data");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  
  // Send email
  $to = "newjerusalemcleaning@gmail.com";
  $subject = "New Form Submission";
  $messageBody = "Name: $name\nEmail: $email\nPhone #: $phone\nMessage: $message";
  
  mail($to, $subject, $messageBody);

  // Redirect to payment page
  header("Location: payment.html");
  exit();
}
?>
