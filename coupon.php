<?php 

$coupon_id = $_GET['id'];
require_once('db.config.php');

$coupon = $mysqli->prepare('SELECT * FROM coupon WHERE id = ?');
$coupon->bind_param('i', $coupon_id);
$coupon->execute();
$coupon->bind_result($id, $code, $author, $vendor, $expiration, $title, $description, $upvotes, $downvotes, $createDate);
$coupon->fetch();
$coupon->close();

$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="B-rELLAyRf5kaXynTQldI32HBFNxVttzgksoT6AqWA8" />
    <meta charset="utf-8">
    <title> Clipmob </title>
    <link rel="icon" type="image/png" href = "img/fbicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find the best deals for you!">
    <meta name="author" content="JJTN">
    <!-- Le styles -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/css" href="m.less">
    <script src="js/less.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://api.filepicker.io/v0/filepicker.js"></script>
    <script src="js/filepicker.js" type="text/javascript"></script>
    
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
              <h1>Coupon: <?php echo $id; ?></h1>
              <p>
                <br />
                Code: <?php echo $code; ?><br />
                Title: <?php echo $title; ?><br />
                Description: <?php echo $description; ?><br />
                Expiration Date: <?php echo $expiration; ?><br />
                Author: <?php echo $author; ?><br />
                Upvotes: <?php echo $upvotes; ?><br />
                Downvotes: <?php echo $downvotes; ?>
                
              </p>
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
    
  </body>
</html>

