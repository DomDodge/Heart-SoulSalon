<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "dominicdodge84@gmail.com";
    $subject = "New Appointment Request";
    $message = "First Name: " . $_POST['myFName'] . "\n"
             . "Last Name: " . $_POST['myLName'] . "\n"
             . "Email: " . $_POST['myEmail'] . "\n"
             . "Phone Number: " . $_POST['myPhone'] . "\n"
             . "Wedding Date: " . $_POST['myDate'] . "\n";
    
    $headers = "From: " . $_POST['myEmail'] . "\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Thank you for your appointment request. We will get back to you shortly.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your appointment request. Please try again later.</p>";
    }
}
?>