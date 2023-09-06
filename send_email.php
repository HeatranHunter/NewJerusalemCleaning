<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $trash_day = $_POST["trash-day"];
    $num_cans = $_POST["num-cans"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $to = "contact@newjerusalemcleaning.com";
    $subject = "New Form Submission";
    $message = "First Name: $first_name\n"
             . "Last Name: $last_name\n"
             . "Trash Day: $trash_day\n"
             . "Number of Trash Cans: $num_cans\n"
             . "Address: $address\n"
             . "Email: $email\n"
             . "Phone: $phone\n";
    mail($to, $subject, $message);

    // Redirect back to the form page
    header("Location: ./payment.html");
    exit();
}
?>
