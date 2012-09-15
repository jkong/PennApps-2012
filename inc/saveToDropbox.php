<?php

//function save_To_Dropbox($url) {
//}

$consumerKey = 'z5zj4jmr5rou75m';
$consumerSecret = 'yhm7fnbw760u06y';

include '../lib/dropbox-php-sdk/autoload.php';

session_start();
$oauth = new Dropbox_OAuth_PHP($consumerKey, $consumerSecret);

// If the PHP OAuth extension is not available, you can try
// PEAR's HTTP_OAUTH instead.
//$oauth = new Dropbox_OAuth_PEAR($consumerKey,$consumerSecret);

$dropbox = new Dropbox_API($oauth);

?>
