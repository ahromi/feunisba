<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*Untuk Mengaktifkan icon link Form pada top menu*/
	echo $css_menu;
	/*
		view_detail_skk.php -> Forms | View Detail Admin SKK
	*/
	foreach($hasil_cetak as $cetak){
?>

<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo site_url() ?>" class="glyphicons home"><i></i> SPAM FEUNISBA</a></li>
	<li class="divider"> | </li>
	<li>Forms</li>
	<li class="divider"> | </li>
	<li>View Detail Admin SKK</li>
</ul>

<h3>View Detail Admin SKK</h3>
<div class="innerLR">
<!-- Tampilkan Pesan Flash Data -->
			<?php echo !empty($error) ? '<p class="gagal">' . $error . '</p>' : '';?>
			<?php echo !empty($pesan) ? '<p class="sukses">' . $pesan . '</p>' : '';?>
<!-- Form -->
		<?php 
			$attrib	= array('class'	=> 'form-horizontal margin-none',
									'name'	=> 'form_input',
									'method'	=> 'post');
			echo form_open_multipart('index.php/skk/prosesSkk?zXdu88='.$cetak->idfe_skk,$attrib);
		?>	
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
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="nm_mhs">Nama Lengkap</label>
							<div class="controls"><input class="span12" id="nm_mhs" name="nm_mhs" type="text" disabled="disabled" value="<?php echo $cetak->nama; ?>" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="npm">NPM</label>
							<div class="controls"><input class="span12" id="npm" name="npm" type="text" disabled="disabled" value="<?php echo $cetak->npm; ?>" /></div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
					<!-- Column -->
					<div class="span6">
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
									
									echo form_dropdown('prodi', $options, $cetak->prodi,$js);
								?>
							</div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="email">Email</label>
							<div class="controls"><input class="span12" id="email" name="email" type="text" disabled="disabled" value="<?php echo $cetak->email; ?>" /></div>
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
				<h4 class="heading">Data Orang Tua</h4>
			</div>
			<!-- // Widget heading END -->
			<!-- // Widget body -->
			<div class="widget-body">
				<!-- Row -->
				<div class="row-fluid">
					<!-- Column -->
					<div class="span6">
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="nm_ortu">Nama Lengkap</label>
							<div class="controls"><input class="span12" id="nm_ortu" name="nm_ortu" type="text" disabled="disabled" value="<?php echo $cetak->nama_ortu; ?>" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="alamat">Alamat</label>
							<div class="controls"><textarea class="span12" id="alamat" name="alamat" rows="4" disabled="disabled"><?php echo $cetak->alamat_ortu; ?></textarea></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="pekerjaan">Pekerjaan</label>
							<div class="controls"><input class="span12" id="pekerjaan" name="pekerjaan" type="text" disabled="disabled" value="<?php echo $cetak->pekerjaan; ?>" /></div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
					<!-- Column -->
					<div class="span6">
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="golongan">Golongan</label>
							<div class="controls"><input class="span12" id="golongan" name="golongan" type="text" disabled="disabled" value="<?php echo $cetak->pangkat; ?>" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="nip">NIP</label>
							<div class="controls"><input class="span12" id="nip" name="nip" type="text" disabled="disabled" value="<?php echo $cetak->nip; ?>" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="jabatan">Jabatan</label>
							<div class="controls"><input class="span12" id="jabatan" name="jabatan" type="text" disabled="disabled" value="<?php echo $cetak->jabatan; ?>" /></div>
						</div>
						<!-- // Group END -->
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="instansi">Instansi</label>
							<div class="controls"><input class="span12" id="instansi" name="instansi" type="text" disabled="disabled" value="<?php echo $cetak->instansi; ?>" /></div>
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
		<!-- Widget -->
		<div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">		
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Berkas Persyaratan</h4>
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
							<label class="control-label" for="fileupload">DPP Terakhir</label>
							<div class="controls"><a href="#lihat-dpp" data-toggle="modal"><?php echo '<img src="'.base_url().'uploads/'.$cetak->npm.'/skk/'.$cetak->dpp.'" alt="DPP Terakhir" class="img thumb" />'; ?></a></div>
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
				<h4 class="heading">Data Proses</h4>
			</div>
			<!-- // Widget heading END -->
			<!-- // Widget body -->
			<div class="widget-body">
				<!-- Row -->
				<div class="row-fluid">
					<!-- Column -->
					<div class="span6">
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="no_surat">Nomor Surat</label>
							<div class="controls"><input class="span12" id="no_surat" name="no_surat" type="text" /></div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->
					<!-- Column -->
					<div class="span6">
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="ttd">Tanda Tangan</label>
							<div class="controls">
								<?php
									$options = array(
									                  '0'  				=> 'Pilih Pejabat yang Berwenang',
									                  'D.01.0.354'   => 'Wakil Dekan I'
									                );
									$js = 'id="ttd" class="span12" disabled="disabled"';
									
									echo form_dropdown('ttd', $options,$js);
								?>
							</div>
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

		<!-- Form actions -->
		<div class="form-actions">
			<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Proses</button>
			<button type="button" class="btn btn-icon btn-default glyphicons circle_remove" onclick="goBack()"><i></i>Batal</button>
			<script>
				function goBack() {
				    window.history.back()
				}
			</script>
		</div>
		<!-- // Form actions END -->

	</form>
	<!-- // Form END -->
</div>
<br />
<br />
<!-- Modal -->
<div class="modal hide fade" id="lihat-dpp">
	
	<!-- Modal heading -->
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>DPP Terakhir</h3>
	</div>
	<!-- // Modal heading END -->
	<!-- Form -->
	<?php 
		$attrib	= array('class'	=> 'form-horizontal margin-none',
								'name'	=> 'form_input',
								'method'	=> 'post');
		echo form_open_multipart('index.php/skk/prosesSkk?zXdu88='.$cetak->idfe_skk,$attrib);
	?>	
	<!-- Modal body -->
	<div class="modal-body">
		<?php echo '<img src="'.base_url().'uploads/'.$cetak->npm.'/skk/'.$cetak->dpp.'" />';?>
		<br />
		<br />
		<!-- Row -->
		<div class="row-fluid">
			<!-- Column -->
			<div class="span6">
				<!-- Group -->
				<div class="control-group">
					<label class="control-label" for="no_surat">Nomor Surat</label>
					<div class="controls"><input class="span12" id="no_surat" name="no_surat" type="text" /></div>
				</div>
				<!-- // Group END -->
				<!-- Group -->
				<div class="control-group">
					<label class="control-label" for="ttd">Tanda Tangan</label>
					<div class="controls">
						<?php
							$options = array(
							                  '0'  				=> 'Pilih Pejabat yang Berwenang',
							                  'D.01.0.354'   => 'Wakil Dekan I'
							                );
							$js = 'id="ttd" class="span12"';
							
							echo form_dropdown('ttd', $options,$js);
						?>
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
			<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Proses</button>
			<button type="button" class="btn btn-icon btn-default glyphicons circle_remove" data-dismiss="modal"><i></i>Batal</button>
		</div>
		<!-- // Form actions END -->
	</div>
	<!-- // Modal footer END -->
	</form>
	<!-- Form END -->
</div>
<!-- // Modal END -->
<?php
	}
?>