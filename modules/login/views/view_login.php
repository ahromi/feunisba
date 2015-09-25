<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fixed top-full menuh-top"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if !IE]><!--><html class="animations fixed top-full menuh-top"><!-- <![endif]-->
<head>
	<title>SPAM FEBUNISBA</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	<!-- Bootstrap -->
	<link href="<?php echo base_url()?>common/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>common/bootstrap/css/responsive.css" rel="stylesheet" type="text/css" />
	
	<!-- Glyphicons Font Icons -->
	<link href="<?php echo base_url()?>common/theme/fonts/glyphicons/css/glyphicons.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="<?php echo base_url()?>common/theme/fonts/font-awesome/css/font-awesome.min.css">
	<!--[if IE 7]><link rel="stylesheet" href="<?php echo base_url()?>common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->
	
	<!-- Pesan Flash Data Stylesheet :: CSS -->
	<link href="<?php echo base_url()?>common/theme/css/pesan.css" rel="stylesheet" type="text/css" />
	
	<!-- Uniform Pretty Checkboxes -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
	
	<!-- PrettyPhoto -->
    <link href="<?php echo base_url()?>common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet" />
    
    <!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="<?php echo base_url()?>common/theme/scripts/plugins/system/html5shiv.js"></script>
    <![endif]-->
	
	<!-- Main Theme Stylesheet :: CSS -->
	<link href="<?php echo base_url()?>common/theme/css/style-default-menus-dark.css?1374506526" rel="stylesheet" type="text/css" />
	
	
	<!-- FireBug Lite -->
	<!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->

	<!-- LESS.js Library -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/less.min.js"></script>
	
	<!-- Global -->
	<script>
	//<![CDATA[
	var basePath = '',
		commonPath = 'common/';

	// colors
	var primaryColor = '#e5412d',
		dangerColor = '#b55151',
		successColor = '#609450',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';

	var themerPrimaryColor = primaryColor;
	//]]>
	</script>
</head>
<body class="document-body login" onLoad="document.getElementById('username').focus()">
	
	<!-- Wrapper -->
<div id="login">

	<div class="container">
	
		<div class="wrapper">
			<img src="<?php echo base_url() ?>common/library/image/header.jpg" alt="header" />
			<h1 class="glyphicons lock">SPAM FEBUNISBA <i></i></h1>
		<?php echo !empty($pesan) ? '<p class="gagal">' . $pesan . '</p>' : '';?>
		<?php echo !empty($pesan2) ? '<p class="sukses">' . $pesan2 . '</p>' : '';?>
			<!-- Box -->
			<div class="widget widget-heading-simple widget-body-gray">
				
				<div class="widget-body">
				
					<!-- Form -->
					<form method="post" action="<?php echo base_url()?>index.php/login/checkLogin" id="login_form">
						<label>Username</label>
						<input type="text" class="input-block-level" id="username" name="uname" placeholder="Username" /> 
<!--						<label>Password <a class="password" href="">forgot it?</a></label> -->
						<label>Password</label>
						<input type="password" class="input-block-level margin-none" id="password" name="upass" placeholder="Password Anda" />
						<div class="separator bottom"></div> 
						<div class="row-fluid">
							<div class="span8">
<!--								<div class="uniformjs"><label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label></div> -->
							</div>
							<div class="span4 center">
								<button class="btn btn-block btn-inverse" type="submit">Masuk</button>
							</div>
						</div>
					</form>
					<!-- // Form END -->
							
				</div>
				<div class="widget-footer">
					<p class="glyphicons restart"><i></i>Silakan isi Username dan Password anda dengan benar</p>
				</div>
				
			</div>
			<!-- // Box END -->
			
			<!-- 
			<div class="innerT center">
			
				<a href="signup.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-dark&amp;sidebar=false" class="btn btn-icon-stacked btn-block btn-success glyphicons user_add"><i></i><span>Don't have an account?</span><span class="strong">Sign up</span></a>
				
				<p class="innerT">Alternatively</p>
				<a href="index.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-dark&amp;sidebar=false" class="btn btn-icon-stacked btn-block btn-facebook glyphicons facebook"><i></i><span>Join using your</span><span class="strong">Facebook Account</span></a>
				<p>or</p>
				<a href="index.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-dark&amp;sidebar=false" class="btn btn-icon-stacked btn-block btn-google glyphicons google_plus"><i></i><span>Join using your</span><span class="strong">Google Account</span></a>
				<p>Having troubles? <a href="faq.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-dark&amp;sidebar=false">Get Help</a></p>
			</div>
			-->
			
		</div>
		
	</div>
	
</div>
<!-- // Wrapper END -->	


	
	<!-- jQuery Event Move -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery.event.move/js/jquery.event.move.js"></script>
	
	<!-- jQuery Event Swipe -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery.event.swipe/js/jquery.event.swipe.js"></script>
	
	<!-- jQuery ScrollTo Plugin -->
	<!--[if gt IE 8]><!--><script src="http://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script><!--<![endif]-->
	
	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src="http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script><!--<![endif]-->
	
	<!-- jQuery Ajaxify -->
	<!--[if gt IE 8]><!--><script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5.js"></script><!--<![endif]-->
	
	
	<!-- Code Beautify -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/js-beautify/beautify.js"></script>
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/js-beautify/beautify-html.js"></script>
	
	<!-- PrettyPhoto -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>
	
	
	<!-- Modernizr -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/modernizr.js"></script>
	
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>common/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.js"></script>
	
	<!-- Holder Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/holder/holder.js?1374506526"></script>
	
	<!-- Uniform Forms Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- MegaMenu -->
	<script src="<?php echo base_url()?>common/theme/scripts/demo/megamenu.js?1374506526"></script>

	
	
	<!-- Common Demo Script -->
	<script src="<?php echo base_url()?>common/theme/scripts/demo/common.js?1374506526"></script>
	
</body>
</html>