<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "amudhan.m2004@gmail.com"; // Change this to your admin email
  $subject = "New Contact Form Submission";
  $message = "Name: " . $_POST['name'] . "\r\n";
  $message .= "Email: " . $_POST['email'] . "\r\n";
  $message .= "Phone No: " . $_POST['phone'] . "\r\n";
  $message .= "Address: " . $_POST['address'] . "\r\n";
  $message .= "Message: " . $_POST['message'] . "\r\n";

  $headers = "From: " . $_POST['email'] . "\r\n" .
    "Reply-To: " . $_POST['email'] . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);
}
?>
