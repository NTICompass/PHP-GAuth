Google Authenticator for PHP
============================

This is a Google Authenticator class for PHP.  
It requires a base32 implementation, you can use mine: https://raw.github.com/NTICompass/PHP-Base32/

Usage:

Generate QR Code for user to scan:

    <?php
      require_once('GAuth.php');
      $auth = new GAuth;
      $key = $auth->getKey();
      echo '<img src="'.$auth->QRCode('YourDomain.com').'" />';
    ?>

Verifying code:

    <?php
      require_once('GAuth.php');
      $auth = new GAuth;
	  // otp is the code from the authenticator
	  // key is the $key from the above example
      $valid = $auth->verify($_GET['otp'], $_GET['key']);	          
    ?>