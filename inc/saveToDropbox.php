<?php

//function save_To_Dropbox($url) {
//}

$consumerKey = 'yloxv4myo44esd2';
$consumerSecret = '08frgq05u2t3r3c';
include '../lib/dropbox-php-sdk/autoload.php';
$oauth = new Dropbox_OAuth_PEAR($consumerKey, $consumerSecret);

$dropbox = new Dropbox_API($oauth, 'sandbox');

session_start();

// There are multiple steps in this workflow, we keep a 'state number' here
if (isset($_SESSION['state'])) {
    $state = $_SESSION['state'];
} else {
    $state = 1;
}

switch($state) {

    /* In this phase we grab the initial request tokens
       and redirect the user to the 'authorize' page hosted
       on dropbox */
    case 1 :
        //echo "Step 1: Acquire request tokens\n";
        $tokens = $oauth->getRequestToken();
        //print_r($tokens);

        // Note that if you want the user to automatically redirect back, you can
        // add the 'callback' argument to getAuthorizeUrl.
        //echo "Step 2: You must now redirect the user to:\n";
        //echo $oauth->getAuthorizeUrl() . "\n";
        $_SESSION['state'] = 2;
        $_SESSION['oauth_tokens'] = $tokens;
        $callback_url = 'http://jobcoll.com/inc/saveToDropbox.php';
        //echo $oauth->getAuthorizeUrl($callback_url);
        header('Location: ' . $oauth->getAuthorizeUrl($callback_url));
        die();

    /* In this phase, the user just came back from authorizing
       and we're going to fetch the real access tokens */
    case 2 :
        echo "Step 3: Acquiring access tokens\n";
        $oauth->setToken($_SESSION['oauth_tokens']);
        $tokens = $oauth->getAccessToken();
        print_r($tokens);
        $_SESSION['state'] = 3;
        $_SESSION['oauth_tokens'] = $tokens;
        // There is no break here, intentional

    /* This part gets called if the authentication process
       already succeeded. We can use our stored tokens and the api 
       should work. Store these tokens somewhere, like a database */
    case 3 :
        echo "The user is authenticated\n";
        echo "You should really save the oauth tokens somewhere, so the first steps will no longer be needed\n";
        print_r($_SESSION['oauth_tokens']);
        $oauth->setToken($_SESSION['oauth_tokens']);
        break;

}

?>
