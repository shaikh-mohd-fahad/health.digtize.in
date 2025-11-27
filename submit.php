<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    
    // Email to YOU
    $to = "your-email@digtize.in"; 
    $subject = "New Medical Lead: " . $name;
    $message = "Name: " . $name . "\nPhone: " . $phone;
    $headers = "From: no-reply@digtize.in";

    // Simple mail function (Ensure PHP mail is enabled on Hostinger)
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Thank you! We will call you shortly.'); window.location.href='index.php';</script>";
    } else {
        echo "Error sending message.";
    }
}
?>