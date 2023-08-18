<?php
  $bookingId = $_POST['booking_id'];
  $customerEmail = $_POST['customer_email'];
  
  // Send the confirmation email to the customer
  $to = $customerEmail;
  $subject = 'Booking Confirmation';
  $message = 'Your booking with ID ' . $bookingId . ' has been confirmed.';
  $headers = 'From: maheshyadav0170@gmail.com' . "\r\n" .
             'Reply-To: maheshyadav0170@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
?>