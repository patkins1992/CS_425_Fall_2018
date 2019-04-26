<?php


require_once '../phpCAS-master/CAS.php';
// Enable debugging
phpCAS::setDebug();
// Enable verbose error messages. Disable in production!
phpCAS::setVerbose(true);
// Initialize phpCAS
phpCAS::client(CAS_VERSION_2_0, "cas.isg.siue.edu",443, "itscas");
// For production use set the CA certificate that is the issuer of the cert
// on the CAS server and uncomment the line below
 phpCAS::setCasServerCACert("../CASCertificate.cer");

// force CAS authentication
phpCAS::forceAuthentication();
// at this step, the user has been authenticated by the CAS server
// and the user's login name can be read with phpCAS::getUser().
// logout if desired
if (isset($_REQUEST['logout'])) {
	phpCAS::logout();
}

?>

<html>
  <head>
    <title>phpCAS simple client</title>
  </head>
  <body>
    <h1>Successfull Authentication!</h1>
    <?php require 'script_info.php' ?>
    <p>the user's login is <b><?php echo phpCAS::getUser(); ?></b>.</p>
    <p>phpCAS version is <b><?php echo phpCAS::getVersion(); ?></b>.</p>
    <p><a href="?logout=">Logout</a></p>
  </body>
</html>