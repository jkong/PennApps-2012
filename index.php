<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="B-rELLAyRf5kaXynTQldI32HBFNxVttzgksoT6AqWA8" />
    <meta charset="utf-8">
    <title> Clipmob </title>
    <link rel="shortcut icon" type="image/png" href = "img/clipmobfavicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find the best deals for you!">
    <meta name="author" content="JJTN">
    <!-- Le styles -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/css" href="m.less">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
		<?php
		include_once ('inc/navbar.inc.html');
		?>		
    <div class="container">
      <div id="body">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
          <div class="hero-unit clearfix">
            <div class="pull-left span5">
              <h1></h1>
              <p>
                
              </p>
              <input type="filepicker-dragdrop" data-fp-apikey="A5lqlPP84RH6fEu4JsHNyz" 
                     data-fp-option-container="modal" data-fp-option-multiple="true" 
                     data-fp-option-services="BOX,COMPUTER,DROPBOX,FACEBOOK,GITHUB,GOOGLE_DRIVE,FLICKR,GMAIL,INSTAGRAM,IMAGE_SEARCH,URL,WEBCAM" 
                     onchange="out='';for(var i=0;i<event.files.length;i++){out+=event.files[i].url;out+=' '};alert(out)"> 
              
              <?php require_once('load_coupons.php'); ?>
              
            </div>
          </div>
        </div>
      </div>
    </div> 
		<?php
		include_once ('inc/footer.inc.html');
		?>
    <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/less.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://api.filepicker.io/v0/filepicker.js"></script>
    <script src="js/filepicker.js" type="text/javascript"></script>
  </body>
</html>

