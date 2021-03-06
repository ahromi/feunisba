<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	echo $css_menu;
	/*
		view_fap.php -> Forms | Form Aduan Perkuliahan
	*/
?>
<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo site_url() ?>" class="glyphicons home"><i></i> <?php echo $this->config->item('app_name');?></a></li>
	<li class="divider">|</li>
	<li>Forms</li>
	<li class="divider">|</li>
	<li>Form Aduan Perkuliahan</li>
</ul>

<h3>Form Aduan Perkuliahan</h3>
<div class="innerLR">
<!-- Tampilkan Pesan Flash Data -->
			<?php echo !empty($error) ? '<p class="gagal">' . $error . '</p>' : '';?>
			<?php echo !empty($pesan) ? '<p class="sukses">' . $pesan . '</p>' : '';?>
<!-- Form -->
		<?php 
			$attrib	= array('class'	=> 'form-horizontal margin-none',
									'name'	=> 'form_input',
									'method'	=> 'post');
			echo form_open_multipart('index.php/fap/inputFap',$attrib);
		?>
<!--	<form class="form-horizontal margin-none" id="validateSubmitForm" action="<?php echo base_url()?>index.php/fap/inputFap" method="post" enctype="multipart/form-data" autocomplete="off"> -->
		
		<!-- Widget -->
		<div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Data Pribadi</h4>
			</div>
			<!-- // Widget heading END -->
			<!-- // Widget body -->
			<div class="widget-body">
				<!-- Row -->
				<div class="row-fluid">
					<!-- Column -->
					<div class="span6">
						<p><strong><i>Ubah halaman profil untuk memperbarui Data Pribadi</i></strong></p>
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="nm_mhs">Nama Lengkap</label>
							<div class="controls"><input class="span12" id="nm_mhs" name="nm_mhs" type="text" disabled="disabled" value="<?php echo $nm_mhs; ?>" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="npm">NPM</label>
							<div class="controls"><input class="span12" id="npm" name="npm" type="text" disabled="disabled" value="<?php echo $npm; ?>" /></div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
					<!-- Column -->
					<div class="span6">
						<p><br /></p>
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="prodi">Program Studi</label>
							<div class="controls">
								<?php
									$options = array(
									                  '0'  		=> 'Pilih Program Studi',
									                  '901'    => 'Akuntansi',
									                  '902'  	=> 'Manajemen',
									                  '903' 	=> 'Ilmu Ekonomi',
									                );
									$js = 'id="prodi" class="span12" disabled="disabled"';
									
									echo form_dropdown('prodi', $options, $prodi,$js);
								?>
							</div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="email">Email</label>
							<div class="controls"><input class="span12" id="email" name="email" type="text" disabled="disabled" value="<?php echo $email; ?>" /></div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
				</div>
				<!-- // Row END -->
			</div>
			<!-- Widget body END -->
		</div>	
		<!-- Widget END -->
		<!-- Widget -->
		<div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">		
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Data Aduan</h4>
			</div>
			<!-- // Widget heading END -->
			<!-- // Widget body -->
			<div class="widget-body">
				<!-- Row -->
				<div class="row-fluid">
					<!-- Column -->
					<div class="span6">
						<p><br /></p>
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="jenis_aduan">Jenis Aduan</label>
							<div class="controls">
								<?php
									$options = array(
									                  '0'  							=> 'Pilih Jenis Aduan',
									                  'Jadwal Kuliah'    		=> 'Jadwal Kuliah',
									                  'Ruangan'  					=> 'Ruangan',
									                  'Proses Belajar' 			=> 'Proses Belajar',
									                  'Layanan Administrasi' 	=> 'Layanan Administrasi',
									                  'Lainnya' 					=> 'Lainnya'
									                );
									$js = 'id="jenis_aduan" class="span12"';
									
									echo form_dropdown('jenis_aduan', $options, $js);
								?>
							</div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="keterangan">Keterangan</label>
							<div class="controls"><textarea class="span12" id="keterangan" name="keterangan" rows="4"></textarea></div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
				</div>
				<!-- // Row END -->					
			</div>
			<!-- Widget body END -->
		</div>
		<!-- // Widget END -->

		<!-- Form actions -->
		<div class="form-actions">
			<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Simpan</button>
			<!--<button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Batal</button>-->
		</div>
		<!-- // Form actions END -->
	</form>
	<!-- // Form END -->
</div>
<br />
<br />