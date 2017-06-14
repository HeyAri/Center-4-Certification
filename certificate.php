<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'templates/head.php';
?>

<body>
    <section id="menu-0">
        <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
            <div class="container">
                <div class="mbr-table">
                    <div class="mbr-table-cell">
                        <div class="navbar-brand">
                            <a href="HTTP://center4certs.org" class="navbar-logo">
                                <img src="assets/images/c4c-logo-2000x1241.png" alt="Center For Certification" title="Center For Certification">
                            </a>
                            <a class="navbar-caption" href="index.php"><font color="grey">Center For Certification</font></a>
                        </div>
                                   <div align="right">
                <button class="btn btn-primary" onClick="window.print()">Print your certificate</button>
            </div>
                    </div>
                </div>
            </div>
 
        </nav>
    </section>
    <section>
            <div style="position: relative" width="1000" height="768" border="0" padding:"20px;">
                <img src="images/C4C-<?php echo $_POST['certColor']; ?>.png">
            </div>
            <div align="center" style="position: absolute; left: 301px; top: 210px; width: 418px; height: 429px;" width="1000" text-align: center; padding:20px>
                <h3><font face="klarissa_contourregular"><?php echo $_POST['certDate'] ?></font><br /></h3>
            	<img src="images/spacer.gif" width="415" height="106"><br>
    			<h2><font face="klarissa_contourregular"><?php echo  $_POST['certification']; ?></font><br /></h2>
    			<img src="images/spacer.gif" width="413" height="98"><br>
    			<h1><font face="klarissa_contourregular"><?php echo  $_POST['fullName']; ?></font><br /></h1>
            </div>
    </section>
<center>
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
$mail->Body    .= $_POST['certDate'].' and received a '."<br />";
$mail->Body    .= $_POST['certColor'].' certificate.'."<br /><br />";
$mail->Body    .= $_POST['email'].' '."<br />";

if(!$mail->send()) {
    echo 'Page could not be sent.<br />';
    echo 'Page Error: ' . $mail->ErrorInfo;                   // Shows at the bottom of the page
} else {
    echo '<br />You are officially certified by the powers vested in the Center for Certification.';                               // Shows at the bottom of the page
}

include 'templates/footer.php';

?>
</center>