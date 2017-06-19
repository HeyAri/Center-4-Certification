<?php

require 'includes/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->setFrom('dr-cert@center4certs.org', 'Dr. Cert');         // How you wanna see it in your inbox
$mail->addAddress('dr-cert@center4certs.org', 'Dr. Cert');      // Whom it's being sent to
// $mail->addAddress('dr-cert@center4certs.org');               // Name is also optional
// $mail->addReplyTo('info@example.com', 'Information');        // In case you wanna send to client
// $mail->addAttachment('/var/tmp/file.tar.gz');                // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');           // Optional name
$mail->isHTML(true);                                            // Set email format to HTML
$mail->Subject = $_POST['fullName'].' Certified Themself!';
$mail->Body    = $_POST['fullName'].' is now'."<br />";
$mail->Body    .= $_POST['certification'].' as of '."<br />";
$mail->Body    .= date("F j, Y").' and received a '."<br />";
$mail->Body    .= $_POST['certColor'].' certificate.'."<br /><br />";
$mail->Body    .= $_POST['email'].' '."<br />";

if(!$mail->send()) {
    echo 'Page could not be sent.<br />';
    echo 'Page Error: ' . $mail->ErrorInfo;                   // Shows at the bottom of the page
} else {
    echo '<br />You are officially certified by the powers vested in the Center for Certification.';                               // Shows at the bottom of the page
}
