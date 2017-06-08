<head>

 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=".25">
 <link rel="shortcut icon" href="assets/images/c4c-logo-2000x1241.png" type="image/x-icon">
 <meta name="description" content="Terms and Conditions">
 <title>Certify Yourself</title>
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
 <link rel="stylesheet" href="assets/klarissa/stylesheet.css">
 <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
 <link rel="stylesheet" href="assets/tether/tether.min.css">
 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/dropdown/css/style.css">
 <link rel="stylesheet" href="assets/animate.css/animate.min.css">
 <link rel="stylesheet" href="assets/theme/css/style.css">
 <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87713365-2', 'auto');
  ga('send', 'pageview');

</script>  
</head>

<body>

<section id="menu-a">

<body>

<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="HTTP://center4certs.org" class="navbar-logo"><img src="assets/images/c4c-logo-2000x1241.png" alt="Center For Certification" title="Center For Certification"></a>

            <a class="navbar-caption" href="index.php">Center For Certification</a>
          </div>

        </div>
  
  <div align="left"><br />
<button class="btn btn-primary" onClick="window.print()">Print your certificate</button>
</div>

</section>
<section>
	
	<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include($_SERVER['DOCUMENT_ROOT']."/includes/now.fn");


// this pulls input variables from the session form 
$_SESSION['fullName']		= $_POST['fullName'];
$_SESSION['email']			= $_POST['email'];
$_SESSION['certification'] 	= $_POST['certification'];
$_SESSION['color'] 			= $_POST['color'];
?>

	<?php
	// CREATE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: $name <$email>\n";
	$recipient	= "heyari@a2plcpnl0903.prod.iad2.secureserver.net";
	$subject	= "Someone Certified Themselves";
	$message	= wordwrap($certification, 1024);

	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $message, $headers);
?>
<center>
<table width="1000" height="768" border="0" cellpadding="2" cellspacing="2" background="
<?php echo  $_SESSION['color']; ?>">
	<tr>
		<td width="958" align="center">
        	<h3><font face="klarissa_contourregular"><?php echo date('jS \of F\, Y'); ?></font><br /></h3>
        		<img src="images/spacer.gif" width="415" height="106"><br>
			<h2><font face="klarissa_contourregular"><?php echo  $_SESSION['certification']; ?></font><br /></h2>
				<img src="images/spacer.gif" width="413" height="98"><br>
			<h1><font face="klarissa_contourregular"><?php echo  $_SESSION['fullName']; ?></font><br />
            </h1>
    	</td>
	</tr>
</table>
</center>
</section>
</body>

</html>


