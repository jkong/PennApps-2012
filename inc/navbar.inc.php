<div id="fb-root"></div>
<script src="js/fbinit.js" type="text/javascript"></script>
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
              <?php if ($fbUserID) { 
                $userInfo = $facebook->api('/' . $fbUserID);
                echo 'Welcome ' . $userInfo['name'];
                } else {
                echo '<fb:login-button></fb:login-button>';
              } ?>
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
  