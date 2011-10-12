<?php
require_once('GAuth.php');
$auth = new GAuth;
echo '<img src="'.$auth->QRCode().'" />';
echo '<br/>';
echo '<b>'.$auth->getKey().'</b>';
?>
