<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'templates/head.php';

?>

<body>

<section id="menu-0">
    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">
            <div class="mbr-table">
                <div class="mbr-table-cell">
                    <div class="navbar-brand">
                        <a href="https://center4certs.org" class="navbar-logo">
                            <img src="assets/images/c4c-logo-2000x1241.png" alt="Center For Certification" title="Center For Certification">
                        </a>
                        <a class="navbar-caption" href="index.php"><font color="grey">Center For Certification</font></a>
                    </div>
			        <div float: right><br />
            <button class="btn btn-primary" onClick="window.print()">Print your certificate</button>
        </div>
                </div>
            </div>
        </div>
    </nav>
</section>

<section>
        <div style="position: relative" width="1000" height="768" border="0" padding:"20px;">
            <img src="assets/images/C4C-<?php echo $_POST['certColor']; ?>.png">
        </div>
        <div align="center" style="position: absolute; left: 301px; top: 210px; width: 418px; height: 429px;" width="1000" text-align: center; padding:20px>
            <h3><font face="klarissa_contourregular"><?php echo date("F j, Y"); ?></font><br /></h3>
        	<img src="assets/images/spacer.gif" width="415" height="106"><br>
			<h2><font face="klarissa_contourregular"><?php echo  $_POST['certification']; ?></font><br /></h2>
			<img src="assets/images/spacer.gif" width="413" height="98"><br>
			<h1><font face="klarissa_contourregular"><?php echo  $_POST['fullName']; ?></font><br /></h1>
        </div>
</section>

<?php

include 'includes/emailAdmin.php';
require_once 'templates/footer.php';

?>
