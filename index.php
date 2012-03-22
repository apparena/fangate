<?php 
// Initialize Application
require_once('init.php');
$config = $aa->getConfig();
$instance = $aa->getInstance();
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
         
	<!-- Facebook Meta Data -->
    <meta property="fb:app_id" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content=""/>

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="iConsultants UG - www.app-arena.com">

	<meta name="viewport" content="width=device-width">
	
	<!-- Use jquery ui css style -->
  <!--
	<link rel="stylesheet" type="text/css" href="css/jqueryui/<?=$config['ui_style']['value'];?>/jquery-ui.css" />
  -->
	<!-- Include bootstrap css files -->
	<style type="text/css">
		<?=$config['css_bootstrap']['value'];?>
		<?=$config['css']['value'];?>
	</style>
	
</head>
<body>
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	


  <?php
     require_once(dirname(__FILE__).'/main.php');
  ?>
	
	
	<footer>	
		<div class="branding">
			<?=$config['page_footer_branding']['value'];?>
		</div>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
	
  	<div id="fb-root"></div>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			$(function() {
				$( "#accordion" ).accordion({ autoHeight: false });
			});
		});
		
		window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '<?=$aa_app_id?>', // App ID
		      //channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
		      status     : true, // check login status
		      cookie     : true, // enable cookies to allow the server to access the session
		      xfbml      : true  // parse XFBML
		    });
		    // Additional initialization code here
		  };
	
		  // Load the SDK Asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     d.getElementsByTagName('head')[0].appendChild(js);
		   }(document));
	</script>
  
</body>
</html>
