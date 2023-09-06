<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  
  // Send email
  $to = "contact@newjerusalemcleaning.com";
  $subject = "New Form Submission";
  $messageBody = "Name: $name\nEmail: $email\nPhone #: $phone\nMessage: $message";
  
  mail($to, $subject, $messageBody);

  // Redirect to payment page
  header("Location: payment.html");
  exit();
}
?>
