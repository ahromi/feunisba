<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*Untuk Mengaktifkan icon link Form pada top menu*/
	echo $css_menu;
	/*
		view_sm.php -> Forms | Surat Survai Magang
	*/
?>

<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo site_url() ?>" class="glyphicons home"><i></i> SPAM FEUNISBA</a></li>
	<li class="divider"> | </li>
	<li>Forms</li>
	<li class="divider"> | </li>
	<li>Surat Survai Magang</li>
</ul>

<h3>Surat Survai Magang</h3>
<div class="innerLR">
<!-- Tampilkan Pesan Flash Data -->
			<?php echo !empty($error) ? '<p class="gagal">' . $error . '</p>' : '';?>
			<?php echo !empty($pesan) ? '<p class="sukses">' . $pesan . '</p>' : '';?>
<!-- Form -->
		<?php 
			$attrib	= array('class'	=> 'form-horizontal margin-none',
									'name'	=> 'form_input',
									'method'	=> 'post');
			echo form_open_multipart('index.php/sm/inputSm',$attrib);
		?>
<!--	<form class="form-horizontal margin-none" id="validateSubmitForm" action="<?php echo base_url()?>index.php/ssp/inputSsp" method="post" enctype="multipart/form-data" autocomplete="off"> -->
		
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
				<h4 class="heading">Data Penelitian</h4>
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
							<label class="control-label" for="judul_skripsi">Judul Skripsi</label>
							<div class="controls"><input class="span12" id="judul_skripsi" name="judul_skripsi" type="text" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="nama_perusahaan">Nama Perusahaan</label>
							<div class="controls"><input class="span12" id="nama_perusahaan" name="nama_perusahaan" type="text" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="alamat_perusahaan">Alamat Perusahaan</label>
							<div class="controls"><textarea class="span12" id="alamat_perusahaan" name="alamat_perusahaan" rows="4"></textarea></div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
					<!-- Column -->
					<div class="span6">
						<p> <br /> </p>
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="bid_skripsi">Bidang Skripsi</label>
							<div class="controls"><input class="span12" id="bid_skripsi" name="bidang_skripsi" type="text" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="matkul">Mata kuliah<span style="color:red">*</span></label>
							<div class="controls"><input class="span12" id="matkul" name="matakuliah" type="text" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="dosen">Dosen Pembimbing<span style="color:red">*</span></label>
							<div class="controls"><input class="span12" id="dosen" name="dosen_pembimbing" type="text" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="anggota">Anggota<span style="color:red">*</span></label>
							<div class="controls"><input class="span12" id="anggota" name="anggota" type="text" /></div>
						</div><i><span style="color:red">*</span>) Khusus untuk Survei Mata Kuliah</i>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
				</div>
				<!-- // Row END -->
			</div>
			<!-- Widget body END -->
		</div>	
		<!-- Widget END -->
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