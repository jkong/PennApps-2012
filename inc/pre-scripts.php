<?php

// FACEBOOK -----------------------------------------------------
define('YOUR_APP_ID', '479471488739276');
require 'lib/fb-php-sdk/facebook.php';
$facebook = new Facebook(array(
  'appId'  => '479471488739276',
  'secret' => '3fff44039c9aa1ff89155fd418443a4b',
));
$fbUserID = $facebook->getUser();
// ---------------------------------------------------------------------

?>
