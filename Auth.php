<?php
require_once('GAuth.php');
$auth = new GAuth;
echo $auth->verify($_GET['otp'], $_GET['key']) ? 'YES!' : 'No =(';
