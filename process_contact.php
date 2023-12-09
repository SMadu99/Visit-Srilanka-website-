<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set your email address where you want to receive messages.
    $to = "gasmshanilka@gmail.com";

    // Email subject.
    $email_subject = "New Contact Form Submission: $subject";

    // Compose the email message.
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Set the email headers.
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email.
    $status = mail($to, $email_subject, $email_message, $headers);
    echo $status ;	

    // Redirect the user to a thank you page.
    header("Location: thankyou.html");
}
?>