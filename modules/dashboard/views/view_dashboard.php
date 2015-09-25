<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo base_url()?>" class="glyphicons home"><i></i> <?php echo $this->config->item('app_name');?></a></li>
	<li class="divider">|</li>
	<li>Dashboard</li>
</ul>
			<!-- Tampilkan Pesan Flash Data -->
			<?php echo !empty($error) ? '<p class="gagal">' . $error . '</p>' : '';?>
			<?php echo !empty($pesan) ? '<p class="sukses">' . $pesan . '</p>' : '';?>
<p>Selamat Datang, <?php echo $user[0]['fullname']. " " .$this->session->userdata('feun_usertype'); ?></p>
<div style="align:center"><img src="<?php echo base_url() ?>common/library/image/header.jpg" alt="header" width="50%" /></div>