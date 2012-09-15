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
               data-fp-option-container="modal" data-fp-option-maxsize="1000000" 
               onchange="alert(event.files[0].url)">
               
        <div class="vspace1em">&nbsp;</div>
        <div class="row-fluid">
            <div class="span2">
                <button style="margin-top: 10px" class="btn btn-inverse" data-name="simple get" 
                onClick="filepicker.getFile('image/*', 
                {'container': 'modal', 'services': 
                [filepicker.SERVICES.COMPUTER, filepicker.SERVICES.DROPBOX,filepicker.SERVICES.FLICKR, filepicker.SERVICES.URL], 
                'maxsize': 500* 500},
                function(url, metadata){ var results = $('#getContentsImage').text('Loading...');filepicker.getContents(url, true, function(data){
                    var data_url = 'data:'+metadata.type+';base64,'+data;
                    results.html('<img width=\'400\' src=\''+data_url+'\'/>');
                });});"
                >Upload</button>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span2"><strong>Result:</strong></div>
            <div class="span10">
                <pre id="getContentsImage"><a></a></pre>
            </div>
        </div>
			  
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
    <script src="js/filepicker.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/dropbox.js/0.6.1/dropbox.min.js">
	</script>
    <script src="js/dropbox.js" type="text/javascript"></script>
    
  </body>
</html>

