<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'templates/head.php';
?>
    <link type="text/css" rel="stylesheet" href="./includes/include-1496841039893.css" />
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
                    </div>
                </div>
            </div>
            <div align="left"><br />
                <button class="btn btn-primary" onClick="window.print()">Print your certificate</button>
            </div>
        </nav>
    </section>
    <section>
        <center>
                <div class="ui-page">
         <div id="t-f39803f7-df02-4169-93eb-7547fb8c961a" class="template growth-both firer commentable" name="Template 1" width="" height="">
         <div id="backgroundBox"></div>
         <div id="alignmentBox" class="center">
           <link type="text/css" rel="stylesheet" href="./includes/f39803f7-df02-4169-93eb-7547fb8c961a-1496841039893.css" />
           <!--[if IE]><link type="text/css" rel="stylesheet" href="./resources/templates/f39803f7-df02-4169-93eb-7547fb8c961a-1496841039893-ie.css" /><![endif]-->
           <!--[if lte IE 8]><link type="text/css" rel="stylesheet" href="./resources/templates/f39803f7-df02-4169-93eb-7547fb8c961a-1496841039893-ie8.css" /><![endif]-->
           </div>
           <div id="loadMark"></div>
         </div>
          <div id="backgroundBox"></div>
         <div id="alignmentBox" class="center">
           <link type="text/css" rel="stylesheet" href="./includes/d12245cc-1680-458d-89dd-4f0d7fb22724-1496841039893.css" />
           <!--[if IE]><link type="text/css" rel="stylesheet" href="./resources/screens/d12245cc-1680-458d-89dd-4f0d7fb22724-1496841039893-ie.css" /><![endif]-->
           <!--[if lte IE 8]><link type="text/css" rel="stylesheet" href="./resources/screens/d12245cc-1680-458d-89dd-4f0d7fb22724-1496841039893-ie8.css" /><![endif]-->
           <img id="s-Image_1" class="image firer ie-background commentable"    alt="image" src="images/C4C-<?php echo $_POST['certColor']; ?>.png"/>
           <div id="s-Text_1" class="label singleline firer ie-background commentable"  ><div class="content"><div class="valign"><span id="rtr-s-Text_1_0"><?php echo $_POST['certDate'] ?></span></div></div></div>
           <div id="s-Text_2" class="label singleline firer ie-background commentable"  ><div class="content"><div class="valign"><span id="rtr-s-Text_2_0"><?php echo  $_POST['certification']; ?></span></div></div></div>
           <div id="s-Text_3" class="label singleline firer ie-background commentable"  ><div class="content"><div class="valign"><span id="rtr-s-Text_3_0"><?php echo  $_POST['fullName']; ?></span></div></div></div>

           </div>
           <div id="loadMark"></div> 
    </div>
        </center>
    </section>
     <center>
<?php

    require 'includes/PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->setFrom('dr-cert@center4certs.org', 'Dr. Cert');         // How you wanna see it in your inbox
    $mail->addAddress('dr-cert@center4certs.org', 'Dr. Cert');        // Whom it's being sent to
    // $mail->addAddress('dr-cert@center4certs.org');                          // Name is also optional
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
        echo 'You are officially certified by the powers vested in the Center for Certification.';                               // Shows at the bottom of the page
    }

    include 'templates/footer.php';

?>
 </center>