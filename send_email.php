<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendBookingConfirmationEmail($bookingDetails) {
    $to = $_POST['email']; // Use the email provided in the form
    $subject = "Aquatica: Booking Confirmation";

    // Create the email message using the booking details
    $message = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Booking Confirmation</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #555;
        }
        .booking-details {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        .image {
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Booking Confirmation</h1>
        <p>Thank you for booking with us! Your booking details:</p>
        <div class='booking-details'>
            <p><strong>Name:</strong> {$bookingDetails['fname']} {$bookingDetails['lname']}</p>
            <p><strong>Email:</strong> {$bookingDetails['email']}</p>
            <p><strong>Phone:</strong> {$bookingDetails['phone']}</p>
            <p><strong>City:</strong> {$bookingDetails['city']}</p>
            <p><strong>State:</strong> {$bookingDetails['state']}</p>
            <p><strong>Date:</strong> {$bookingDetails['date']}</p>
            <p><strong>Number of Guests:</strong> {$bookingDetails['guest']}</p>
            <p><strong>Plan:</strong> {$bookingDetails['plans']}</p>
        </div>
        <div class='image'>
            <img src='https://img.freepik.com/premium-photo/small-boy-colorful-background-funny-cartoon-character-school-kid-3d-generative-ai_58409-28679.jpg' alt='Image'>
        </div>
    </div>
</body>
</html>
";

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_gmail@gmail.com'; // Your Gmail email address
        $mail->Password = '';   // Your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('your gmail', 'your name'); // Your name and Gmail email address
        $mail->addAddress($to);

        $mail->isHTML(true); // Set the email content as HTML

        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        return true; // Email sent successfully
    } catch (Exception $e) {
        return false; // Email delivery failed
    }
}
?>