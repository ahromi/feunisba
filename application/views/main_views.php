<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** html
============================================================================ **/
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full menuh-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sidebar-hat"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full menuh-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sidebar-hat"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full menuh-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sidebar-hat"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fluid top-full menuh-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sidebar-hat"> <![endif]-->
<!--[if !IE]><!--><html class="animations fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"><!-- <![endif]-->
<head>
	<title><?php echo $this->config->item('app_name');?></title>
	
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
	
	<!-- Uniform Pretty Checkboxes -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
	
	<!-- PrettyPhoto -->
    <link href="<?php echo base_url()?>common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet" />
    
    <!-- JQuery -->
	<script src="<?php echo base_url()?>common/jquery/jquery-1.10.1.min.js"></script>
	<script src="<?php echo base_url()?>common/jquery/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="<?php echo base_url()?>common/theme/scripts/plugins/system/html5shiv.js"></script>
    <![endif]-->
	
	<!-- Bootstrap Extended -->
	<link href="<?php echo base_url()?>common/bootstrap/extend/jasny-fileupload/css/fileupload.css" rel="stylesheet">
	<link href="<?php echo base_url()?>common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	<link href="<?php echo base_url()?>common/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />
	
	<!-- DateTimePicker Plugin -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
	
	<!-- JQueryUI -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
	
	<!-- MiniColors ColorPicker Plugin -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />
	
	<!-- Notyfy Notifications Plugin -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />
	
	<!-- Gritter Notifications Plugin -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />
	
	<!-- Easy-pie Plugin -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css" rel="stylesheet" />

	<!-- Google Code Prettify Plugin -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />
	
	<!-- Select2 Plugin -->
	<link href="<?php echo base_url()?>common/theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />

	<!-- Pageguide Guided Tour Plugin -->
	<!--[if gt IE 8]><!--><link media="screen" href="<?php echo base_url()?>common/theme/scripts/plugins/other/pageguide/css/pageguide.css" rel="stylesheet" /><!--<![endif]-->

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="<?php echo base_url()?>common/theme/css/style-default-menus-light.css?1374506525" rel="stylesheet" type="text/css" />
	
	<!-- Pesan Flash Data Stylesheet :: CSS -->
	<link href="<?php echo base_url()?>common/theme/css/pesan.css" rel="stylesheet" type="text/css" />

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
<body class="document-body ">
	
		<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden sidebar-hidden-phone fluid menu-left">
		
				<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">
		
		<!-- Sidebar Menu -->
		<div id="menu" class="hidden-print">
		
			<!-- Brand -->
			<a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;top-sticky=false&amp;sidebar-sticky=false&amp;sidebar_type=collapsible" class="appbrand"><span class="text-primary">SPAM</span> <span>FE UNISBA</span></a>
		
			<!-- Scrollable menu wrapper with Maximum height -->
			<div class="slim-scroll" data-scroll-height="800px">
			
				<!-- Menu Toggle Button -->
				<button type="button" class="btn btn-navbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->
				
				<!-- Sidebar Profile -->
				<span class="profile center">
					<a href="#ubah-photo" data-toggle="modal">
						<?php
							$npm=$this->security->xss_clean($this->session->userdata('feun_key'));
							$result = $this->main_models->ambilMahasiswa($npm);
							if ( $result == TRUE) //apabila dilempar dari model true
							{
								$photo = $result[0]['photo'];
								if($photo != NULL)
								{
									echo '<img src="'.base_url().'uploads/'.$npm.'/'.$photo.'" alt="Avatar" />';
								}else 
								{
									echo '<img data-src="holder.js/51x51/dark" alt="Avatar" />';
								}
							}elseif($npm=='admin')
							{
								echo '<img src="'.base_url().'uploads/admin/aing.jpg" alt="Avatar" />';
							}
							
						?>
					</a>
				</span>
				<!-- // Sidebar Profile END -->
				
				<!-- Menu -->
				<ul>
				
										
					<li class=" active"><a href="<?php echo base_url() ?>index.php/dashboard" class="glyphicons home"><i></i><span>Dashboard</span></a></li>

					
				</ul>
				<div class="clearfix"></div>
				<!-- // Menu END -->
				
				<div class="menu-hidden-element alert alert-primary">
					<a class="close" data-dismiss="alert">&times;</a>
					<p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est.</p>
				</div>
			
			</div>
			<!-- // Scrollable Menu wrapper with Maximum Height END -->
			
		</div>
		<!-- // Sidebar Menu END -->
				
		<!-- Content -->
		<div id="content">
		
				<!-- Top navbar -->
		<div class="navbar main">
		
			<!-- Menu Toggle Button -->
			<button type="button" class="btn btn-navbar pull-left visible-phone">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<!-- // Menu Toggle Button END -->
			
						<!-- Not Blank page -->
			
						<!-- Full Top Style -->
			<ul class="topnav pull-left">
				<li class=" active" id="dashboard"><a href="<?php echo base_url() ?>index.php/dashboard" class="glyphicons home"><i></i> Dashboard</a></li>
								
				<li class="mega-menu" id="forms_menu">
					<a href="#" class="glyphicons notes"><i></i> Forms</a>
					<div class="mega-sub">
						<div class="mega-sub-inner">
							<div class="row-fluid"> 
								<div class="span2">
									<h4><i class="icon-book icon-fixed-width text-primary"></i> Form Layanan 1</h4>
									<ul class="icons-ul">
										<li><a href="<?php echo base_url() ?>index.php/spak"><span class="icon-li icon-arrow-right"></span> Surat Permohonan Aktif Kuliah (SPAK)</a></li>
										<li><a href="<?php echo base_url() ?>index.php/spck"><span class="icon-li icon-arrow-right"></span> Surat Permohonan Cuti Kuliah (SPCK)</a></li>
										<li><a href="<?php echo base_url() ?>index.php/sktmb"><span class="icon-li icon-arrow-right"></span> Surat Keterangan Tidak Menerima Beasiswa (SKTMB)</a></li>
										<li><a href="<?php echo base_url() ?>index.php/skb"><span class="icon-li icon-arrow-right"></span> Surat Kelakuan Baik (SKB)</a></li>
										<li><a href="<?php echo base_url() ?>index.php/skk"><span class="icon-li icon-arrow-right"></span> Surat Keterangan Kuliah (SKK)</a></li>
									</ul>
								</div>
								<div class="span2">
									<h4><i class="icon-wrench icon-fixed-width text-primary"></i> Form Layanan 2</h4>
									<ul class="icons-ul">
										<li><a href="<?php echo base_url() ?>index.php/ssp"><span class="icon-li icon-arrow-right"></span> Surat Survai Penelitian (SSP)</a></li>
										<li><a href="<?php echo base_url() ?>index.php/sstmk"><span class="icon-li icon-arrow-right"></span> Surat Survai Tugas Mata Kuliah (SSTMK)</a></li>
										<li><a href="<?php echo base_url() ?>index.php/sm"><span class="icon-li icon-arrow-right"></span> Surat Magang (SM)</a></li>
									</ul>
									<h4><i class="icon-wrench icon-fixed-width text-primary"></i> Form Layanan 3</h4>
									<ul class="icons-ul">
										<li><a href="<?php echo base_url() ?>index.php/skpapu"><span class="icon-li icon-arrow-right"></span> Surat Keterangan Pindah Antar PS Unisba</a></li>
										<li><a href="<?php echo base_url() ?>index.php/skpdpl"><span class="icon-li icon-arrow-right"></span> Surat Keterangan Pindah Dari PT Luar</a></li>
										<li><a href="<?php echo base_url() ?>index.php/skpkpl"><span class="icon-li icon-arrow-right"></span> Surat Keterangan Pindah Ke PT Luar</a></li>
									</ul>
								</div>
								<div class="span3">
									<h4><i class="icon-android icon-fixed-width text-primary"></i> Form Layanan 4</h4>
									<ul class="icons-ul">
										<li><a href="<?php echo base_url() ?>index.php/pus"><span class="icon-li icon-arrow-right"></span> Permohonan Ujian Susulan</a></li>
									</ul>
									<h4><i class="icon-android icon-fixed-width text-primary"></i> Form Layanan 5</h4>
									<ul class="icons-ul">
										<li><a href="<?php echo base_url() ?>index.php/knpmk"><span class="icon-li icon-arrow-right"></span> Koreksi Nilai dan Pengambilan Mata Kuliah</a></li>
									</ul>
									<h4><i class="icon-android icon-fixed-width text-primary"></i> Form Layanan 6</h4>
									<ul class="icons-ul">
										<li id="bjk"><a href="<?php echo base_url() ?>index.php/bjk"><span class="icon-li icon-arrow-right"></span> Bentrok Jadwal Kuliah</a></li>
									</ul>
									<h4><i class="icon-android icon-fixed-width text-primary"></i> Form Layanan 7</h4>
									<ul class="icons-ul">
										<li><a href="<?php echo base_url() ?>index.php/fap"><span class="icon-li icon-arrow-right"></span> Form Aduan Perkuliahan</a></li>
									</ul>
								</div>
								<!--<div class="span5">
									
								</div>-->
							</div>
						</div><!-- /cbp-hrsub-inner -->
					</div><!-- /cbp-hrsub -->
				</li>
			</ul>
			<!-- // Full Top Style END -->
						
			<!-- // Not Blank Page END -->
						
						
						<!-- Top Menu Right -->
			<ul class="topnav pull-right">
			
								<!-- Themer -->
				<!--<li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>-->
				<!-- // Themer END -->
								
				<!-- Language menu -->
				<!--<li class="hidden-phone dropdown dd-1 dd-flags" id="lang_nav">
					<a href="#" data-toggle="dropdown"><img src="<?php echo base_url()?>common/theme/images/lang/en.png" alt="en" /></a>
			    	<ul class="dropdown-menu pull-right">
			      		<li class="active"><a href="?module=admin&amp;page=my_account&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;sidebar_type=collapsible&amp;sidebar-sticky=false&amp;top-sticky=false&amp;lang=en" title="English"><img src="<?php echo base_url()?>common/theme/images/lang/en.png" alt="English"> English</a></li>
			      		<li><a href="?module=admin&amp;page=my_account&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;sidebar_type=collapsible&amp;sidebar-sticky=false&amp;top-sticky=false&amp;lang=ro" title="Romanian"><img src="<?php echo base_url()?>common/theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
			      		<li><a href="?module=admin&amp;page=my_account&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;sidebar_type=collapsible&amp;sidebar-sticky=false&amp;top-sticky=false&amp;lang=it" title="Italian"><img src="<?php echo base_url()?>common/theme/images/lang/it.png" alt="Italian"> Italian</a></li>
			      		<li><a href="?module=admin&amp;page=my_account&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;sidebar_type=collapsible&amp;sidebar-sticky=false&amp;top-sticky=false&amp;lang=fr" title="French"><img src="<?php echo base_url()?>common/theme/images/lang/fr.png" alt="French"> French</a></li>
			      		<li><a href="?module=admin&amp;page=my_account&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;sidebar_type=collapsible&amp;sidebar-sticky=false&amp;top-sticky=false&amp;lang=pl" title="Polish"><img src="<?php echo base_url()?>common/theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
			    	</ul>
				</li>-->
				<!-- // Language menu END -->
				<?php
					$kunci=$this->security->xss_clean($this->session->userdata('username'));
					$result = $this->main_models->ambilUser($kunci);
					if ( $result == TRUE) //apabila dilempar dari model true
					{
						$username	= $result[0]['username'];
						$nama			= $result[0]['fullname'];
						$email		= $result[0]['email'];
					}
										
				?>
			
				<!-- Profile / Logout menu -->
				<li class="account dropdown dd-1" id="account_menu">
										<a data-toggle="dropdown" href="#" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1"><?php echo $this->session->userdata('feun_fullname') ?></span><i></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="#ubah-akun" data-toggle="modal" class="glyphicons cogwheel">Pengaturan Akun<i></i></a></li>
						<li><a href="#ubah-photo" class="glyphicons camera">Ubah Photo<i></i></a></li>
						<li class="profile">
							<span>
								<span class="heading">Profil <a href="<?php echo base_url() ?>index.php/account" class="pull-right text-primary text-weight-regular">Ubah</a></span>
								<a href="#ubah-photo" data-toggle="modal" class="img thumb">
									<?php
										$npm=$this->security->xss_clean($this->session->userdata('feun_key'));
										$result = $this->main_models->ambilMahasiswa($npm);
										if ( $result == TRUE) //apabila dilempar dari model true
										{
											$photo = $result[0]['photo'];
											if($photo != NULL)
											{
												echo '<img src="'.base_url().'uploads/'.$npm.'/'.$photo.'" alt="Avatar" />';
											}else 
											{
												echo '<img data-src="holder.js/51x51/dark" alt="Avatar" />';
											}
										}elseif($npm=='admin')
										{
											echo '<img src="'.base_url().'uploads/admin/aing.jpg" alt="Avatar" />';
										}
									?>
								</a>
								<span class="details">
									<a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-light&amp;top-sticky=false&amp;sidebar-sticky=false&amp;sidebar_type=collapsible" class="strong text-regular"><?php echo $this->session->userdata('feun_username').'-'.$this->session->userdata('feun_fullname');  ?></a>
									<?php echo $this->session->userdata('feun_email'); ?>
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
				
								<a class="btn btn-default btn-mini pull-right" href="#" id="modals-bootbox-confirm" >Keluar</a>
							</span>
						</li>
					</ul>
									</li>
				<!-- // Profile / Logout menu END -->
				
			</ul>
			<!-- // Top Menu Right END -->
			<script type="text/javascript">
				function konfirmasi_keluar()
				{
					var result = confirm("Anda yakin mau keluar?");
					if (result) 
					{
					   window.location = "<?php echo base_url() ?>index.php/login/logout";
					}else {
						window.location = "<?php echo base_url() ?>index.php/dashboard";
					}
				}
				
				$('#modals-bootbox-confirm').click(function()
				{
					bootbox.confirm("Anda yakin ingin keluar?", function(result) 
					{
						if (result==true) 
						{
							window.location = "<?php echo base_url() ?>index.php/login/logout";
						}else
						{
							window.location = "<?php echo base_url() ?>index.php/dashboard";
							$.gritter.add({
								title: 'Callback!',
								text: "BootBox Confirm Callback with result: "+ result
							});
						}
						
						
					});
				});
			</script>
			
			<!--<ul class="topnav pull-right hidden-phone">
				<li><a href="" class="glyphicons envelope single-icon"><i></i><span class="badge fix badge-primary">5</span></a></li>
				<li><a href="" class="glyphicons cup single-icon"><i></i><span class="badge fix badge-primary">7</span></a></li>
				<li class="hidden-tablet"><a href="" class="glyphicons comments single-icon"><i></i><span class="badge fix badge-primary">3</span></a></li>
			</ul>-->
						<div class="clearfix"></div>
			
		</div>
		<!-- Top navbar END -->
				
			<?php echo $contents; ?>
			
		</div>
		<!-- // Content END -->
		
				</div>
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
				
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy"><?php echo $this->config->item('copyright');?></div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	
<!-- Themer -->
<div id="themer" class="collapse">
	<div class="wrapper">
		<span class="close2">&times; close</span>
		<h4>Themer <span>color options</span></h4>
		<ul>
			<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
			<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
			<li>
				<span class="link" id="themer-custom-reset">reset theme</span>
				<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
			</li>
		</ul>
		<div id="themer-getcode" class="hide">
			<hr class="separator" />
			<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
			<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- // Themer END -->

	
	<!-- jQuery Event Move -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery.event.move/js/jquery.event.move.js"></script>
	
	<!-- jQuery Event Swipe -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery.event.swipe/js/jquery.event.swipe.js"></script>
	
	<!-- jQuery ScrollTo Plugin -->
	<!--[if gt IE 8]><!--><script src="<?php echo base_url()?>common/jquery/jquery-scrollto.js"></script><!--<![endif]-->
	
	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src="<?php echo base_url()?>common/jquery/jquery.history.js"></script><!--<![endif]-->
	
	<!-- jQuery Ajaxify -->
	<!--[if gt IE 8]><!--><script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5.js"></script><!--<![endif]-->
	
	
	<!-- Code Beautify -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/js-beautify/beautify.js"></script>
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/js-beautify/beautify-html.js"></script>
	
	<!-- PrettyPhoto -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>
	
	<!-- JQueryUI -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	
	<!-- Modernizr -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/modernizr.js"></script>
	
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>common/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.js"></script>
	
	<!-- Holder Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/holder/holder.js?1374506525"></script>
	
	<!-- Uniform Forms Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- MegaMenu -->
	<script src="<?php echo base_url()?>common/theme/scripts/demo/megamenu.js?1374506525"></script>

	<!-- Bootstrap Extended -->
	<script src="<?php echo base_url()?>common/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="<?php echo base_url()?>common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="<?php echo base_url()?>common/bootstrap/extend/jasny-fileupload/js/bootstrap-fileupload.js"></script>
	<script src="<?php echo base_url()?>common/bootstrap/extend/bootbox.js"></script>
	<script src="<?php echo base_url()?>common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
	<script src="<?php echo base_url()?>common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>
	
	<!-- Google Code Prettify -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>
	
	<!-- Gritter Notifications Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>
	
	<!-- Notyfy Notifications Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>
	
	<!-- MiniColors Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- DateTimePicker Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Cookie Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/system/jquery.cookie.js"></script>
	
	<!-- Select2 Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/forms/select2/select2.js"></script>
	
	<!-- Themer -->
	<script src="<?php echo base_url()?>common/theme/scripts/demo/themer.js"></script>
	
	<!-- Twitter Feed -->
	<script src="<?php echo base_url()?>common/theme/scripts/demo/twitter.js"></script>
	
	<!-- Easy-pie Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js"></script>
	
	<!-- Sparkline Charts Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>
	
	<!-- Ba-Resize Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/other/jquery.ba-resize.js"></script>
	
	
	<!-- DataTables Tables Plugin -->
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/tables/DataTables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/js/TableTools.min.js"></script>
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/js/ColVis.min.js"></script>
	<script src="<?php echo base_url()?>common/theme/scripts/plugins/tables/DataTables/media/js/DT_bootstrap.js"></script>
	
	<!-- Tables Demo Script -->
	<script src="<?php echo base_url()?>common/theme/scripts/demo/tables.js"></script>
	
	
	<!-- Common Demo Script -->
	<script src="<?php echo base_url()?>common/theme/scripts/demo/common.js?1374506525"></script>
	
	<!-- Modal -->
	<div class="modal hide fade" id="ubah-photo">
		
		<!-- Modal heading -->
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Ubah Photo</h3>
		</div>
		<!-- // Modal heading END -->
		<!-- Form -->
		<?php 
			$attrib	= array('class'	=> 'form-horizontal margin-none',
									'name'	=> 'form_input',
									'method'	=> 'post');
			echo form_open_multipart('index.php/account/ubahPhotoAkun',$attrib);
		?>	
		<!-- Modal body -->
		<div class="modal-body">
		<!-- Tampilkan Pesan Flash Data -->
		<?php echo !empty($error) ? '<p class="gagal">' . $error . '</p>' : '';?>
		<?php echo !empty($pesan) ? '<p class="sukses">' . $pesan . '</p>' : '';?>
			<!-- Row -->
			<div class="row-fluid">
				<!-- Column -->
				<div class="span6">
				<p><br /></p>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="fileupload1"><strong>File Format *.jpg</strong><p class="muted"><i>(max file size : 500 KB, 640x480)</i></p></label>
						<div class="fileupload fileupload-new controls" data-provides="fileupload">
							<div class="input-append">
								<div class="uneditable-input"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div>
								<span class="btn btn-default btn-file">
									<span class="fileupload-new">Pilih File</span>
									<span class="fileupload-exists">Ubah</span>
									<input class="span12" type="file" id="fileupload1" name="userfile" />
								</span>
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Hapus File</a>
							</div>
						</div>
					</div>
					<!-- // Group END -->
				</div>
				<!-- // Column END -->
			</div>
			<!-- // Row END -->				
			<div class="separator line bottom"></div>
		</div>
		<!-- // Modal body END -->
		
		<!-- Modal footer -->
		<div class="modal-footer">
			<!-- Form actions -->
			<div class="form-actions" style="margin: 0;">
				<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Simpan</button>
				<button type="button" class="btn btn-icon btn-default glyphicons circle_remove" data-dismiss="modal"><i></i>Batal</button>
			</div>
			<!-- // Form actions END -->
		</div>
		<!-- // Modal footer END -->
		</form>
		<!-- Form END -->
	</div>
	<!-- // Modal END -->
	
	<!-- Modal -->
	<div class="modal hide fade" id="ubah-akun">
		
		<!-- Modal heading -->
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Ubah Akun</h3>
		</div>
		<!-- // Modal heading END -->
		<!-- Form -->
		<?php 
			$attrib	= array('class'	=> 'form-horizontal margin-none',
									'name'	=> 'form_input',
									'method'	=> 'post');
			echo form_open_multipart('index.php/account/ubahDataAkun',$attrib);
		?>	
		<!-- Modal body -->
		<div class="modal-body">
			<!-- Row -->
			<div class="row-fluid">
			
				<!-- Column -->
				<div class="span3">
					<strong>Ubah Password</strong>
					<!--<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
				</div>
				<!-- // Column END -->
				
				<!-- Column -->
				<div class="span9">
					<label for="inputUsername">Username</label>
					<input type="text" id="inputUsername" class="span10" value="<?php echo $this->session->userdata('feun_username') ?>" disabled="disabled" />
					<span class="btn-action single glyphicons circle_question_mark margin-none" data-toggle="tooltip" data-placement="top" data-original-title="Username tidak dapat diubah"><i></i></span>
					<div class="separator bottom"></div>
							
					<label for="inputPasswordOld">Password Lama</label>
					<input type="password" id="inputPasswordOld" name="pass_lama" class="span10" value="" placeholder="Konfirmasi Password Lama untuk Ubah Password" />
					<span class="margin-none btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Biarkan kosong jika Password tidak ingin diubah"><i></i></span>
					<div class="separator bottom"></div>
					
					<label for="inputPasswordNew">Password Baru</label>
					<input type="password" id="inputPasswordNew" name="pass_baru" class="span12" value="" placeholder="Isi Password Baru" />
					<div class="separator bottom"></div>
					
					<label for="inputPasswordNew2">Ulangi Password Baru</label>
					<input type="password" id="inputPasswordNew2" name="pass_baru_konfir" class="span12" value="" placeholder="Konfirmasi Password Baru" />
					<div class="separator bottom"></div>
				</div>
				<!-- // Column END -->
				
			</div>
			<!-- // Row END -->
			
			<div class="separator line bottom"></div>
		</div>
		<!-- // Modal body END -->
		
		<!-- Modal footer -->
		<div class="modal-footer">
			<!-- Form actions -->
			<div class="form-actions" style="margin: 0;">
				<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Simpan</button>
				<button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Batal</button>
			</div>
			<!-- // Form actions END -->
		</div>
		<!-- // Modal footer END -->
		</form>
		<!-- Form END -->
	</div>
	<!-- // Modal END -->

	<!-- Common Demo Script -->
	<script src="<?php echo base_url() ?>common/theme/scripts/demo/common.js?1374506517"></script>
</body>
</html>