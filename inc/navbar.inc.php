<?php

define('YOUR_APP_ID', '479471488739276');

//uses the PHP SDK.  Download from https://github.com/facebook/php-sdk
require 'lib/fb-php-sdk/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '479471488739276',
  'secret' => '3fff44039c9aa1ff89155fd418443a4b',
));

$userId = $facebook->getUser();

?>

<div id="fb-root"></div>
<?php if ($userId) { 
      $userInfo = $facebook->api('/' . $userId); ?>
Welcome <?= $userInfo['name'] ?>
    <?php } else { ?>
<fb:login-button></fb:login-button>
    <?php } ?>
<script src="js/fblogin.js" type="text/javascript"></script>
<div id="wrapper">
  <div id="header">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="index.php"><img src="img/clipmoblogo.png" width="100" height="32" alt="Logo"/></a>
              </li>
              <li>
                <a href="index.php">Browse Deals</a>
              </li>
              <li>
                <a href="friends.php">Friends</a>
              </li>
              <li>
                <a href="upload.php">Add a Deal!</a>
              </li>
              <li>
                <a href="about.php">FAQs</a>
              </li>
            </ul>
            <div class="navbar-search pull-right">
              <div class="fb-login-button">Login with Facebook</div>
              <!-- <div class="input-prepend">
                      <span class="add-on search-query"><i class="icon-search icon-white"></i></span>
                      <input type="text" class="search-query span3" placeholder="search">
              </div> -->
            </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </div>
  <div id="fb-root"></div>
  <script src="js/fbinit.js" type="text/javascript"></script>
  