<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $trash_day = $_POST["trash-day"];
    $num_cans = $_POST["num-cans"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $to = "newjerusalemcleaning@gmail.com";
    $subject = "New Contact Form Submission";
    $message = "First Name: $first_name\n"
             . "Last Name: $last_name\n"
             . "Trash Day: $trash_day\n"
             . "Number of Trash Cans: $num_cans\n"
             . "Address: $address\n"
             . "Email: $email\n"
             . "Phone: $phone\n";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to the form page
    header("Location: ./payment.html");
    exit();
}
?>
