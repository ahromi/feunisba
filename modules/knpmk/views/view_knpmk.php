<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*Untuk Mengaktifkan icon link Form pada top menu*/
	echo $css_menu;
	/*
		view_knpmk.php -> Forms | Koreksi Nilai dan Pengambilan Mata Kuliah
	*/
?>

<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo site_url() ?>" class="glyphicons home"><i></i> SPAM FEUNISBA</a></li>
	<li class="divider"> | </li>
	<li>Forms</li>
	<li class="divider"> | </li>
	<li>Koreksi Nilai dan Pengambilan Mata Kuliah</li>
</ul>

<h3>Koreksi Nilai dan Pengambilan Mata Kuliah</h3>
<div class="innerLR">
<!-- Tampilkan Pesan Flash Data -->
			<?php echo !empty($error) ? '<p class="gagal">' . $error . '</p>' : '';?>
			<?php echo !empty($pesan) ? '<p class="sukses">' . $pesan . '</p>' : '';?>
<!-- Form -->
		<?php 
			$attrib	= array('class'	=> 'form-horizontal margin-none',
									'name'	=> 'form_input',
									'method'	=> 'post');
			echo form_open_multipart('index.php/knpmk/inputKnpmk',$attrib);
		?>
<!--	<form class="form-horizontal margin-none" id="validateSubmitForm" action="<?php echo base_url()?>index.php/knpmk/inputKnpmk" method="post" enctype="multipart/form-data" autocomplete="off"> -->
		
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
				<h4 class="heading">Data Matakuliah</h4>
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
							<label class="control-label" for="matkul">Matakuliah</label>
							<div class="controls"><input class="span12" id="matkul" name="matakuliah" type="text" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="nilai_dpna">Nilai tertulis di DPNA</label>
							<div class="controls">
								<input class="span12" id="nilai_dpna" name="nilai_dpna" type="text" />
							</div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
					<!-- Column -->
					<div class="span6">
					<p><br /></p>
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="semester">Semester</label>
							<div class="controls">
								<?php
									$options = array(
									                  '0'  		=> 'Pilih Semester',
									                  '1'    	=> 'Semester I',
									                  '2'  		=> 'Semester II',
									                  '3' 		=> 'Semester III',
									                  '4'    	=> 'Semester IV',
									                  '5'  		=> 'Semester V',
									                  '6' 		=> 'Semester VI',
									                  '7'    	=> 'Semester VII',
									                  '8'  		=> 'Semester VIII'
									                );
									$js = 'id="semester" class="span12"';
									
									echo form_dropdown('semester', $options, $js);
								?>
							</div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="nilai_transkrip">Nilai tertulis di Transkrip</label>
							<div class="controls">
								<input class="span12" id="nilai_transkrip" name="nilai_transkrip" type="text" />
							</div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
				</div>
				<!-- // Row END -->			
			</div>
			<!-- // Widget Body END -->
		</div>
		<!-- // Widget END -->
		<!-- Widget -->
		<div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">		
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Unggah Berkas</h4>
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
							<label class="control-label" for="fileupload1">FRS</label>
							<div class="fileupload fileupload-new controls" data-provides="fileupload">
								<div class="input-append">
									<div class="uneditable-input"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div>
									<span class="btn btn-default btn-file">
										<span class="fileupload-new">Pilih File</span>
										<span class="fileupload-exists">Ubah</span>
										<input class="span12" type="file" id="fileupload1" name="files[]" />
									</span>
									<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Hapus File</a>
								</div>
							</div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
					<!-- Column -->
					<div class="span6">
					<p><br /></p>
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="fileupload2">Transkrip</label>
							<div class="fileupload fileupload-new controls" data-provides="fileupload">
								<div class="input-append">
									<div class="uneditable-input"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div>
									<span class="btn btn-default btn-file">
										<span class="fileupload-new">Pilih File</span>
										<span class="fileupload-exists">Ubah</span>
										<input class="span12" type="file" id="fileupload2" name="files[]" />
									</span>
									<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Hakpus File</a>
								</div>
							</div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
				</div>
				<!-- // Row END -->				
			</div>
			<!-- // Widget Body END -->
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