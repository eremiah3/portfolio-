<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $project = $_POST['user_project'];

    // Set your email address where you want to receive the emails
    $to = "agboolagbolahan14@gmail.com";

    // Set email subject
    $subject = "New Form Submission";

    // Construct the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Project: $project\n";

    // Set headers
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong.";
    }
} else {
    echo "There was an error submitting the form. Please try again.";
}
?>
