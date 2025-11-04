<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $department = htmlspecialchars($_POST['department']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    echo "
    <div style='background:#e3f7e8;padding:15px;border-radius:10px;'>
      <h3 style='color:#007b5e;'>✅ Thank You for your Appointment!</h3>
      <p><b>Name:</b> $fullname</p>
      <p><b>Email:</b> $email</p>
      <p><b>Phone:</b> $phone</p>
      <p><b>Department:</b> $department</p>
      <p><b>Date:</b> $date</p>
      <p><b>Message:</b> $message</p>
      <p style='color:green;font-weight:bold;'>We’ll contact you soon for confirmation!</p>
    </div>
    ";
} else {
    echo "Invalid Request";
}
?>
