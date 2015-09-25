<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*
		view_edit_account.php -> Ubah Data Akun
	*/
?>
<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo base_url()?>" class="glyphicons notes"><i></i> <?php echo $this->config->item('app_name');?></a></li>
	<li class="divider">|</li>
	<li>Ubah Data Akun</li>
</ul>

<h3>Ubah Data Akun</h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget widget-tabs border-bottom-none">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<!--<li class="active"><a class="glyphicons edit" href="#data-pribadi" data-toggle="tab"><i></i>Data Pribadi</a></li>
				<li><a class="glyphicons edit" href="#data-orangtua" data-toggle="tab"><i></i>Data Orangtua</a></li>-->
				<li><a class="glyphicons edit" href="#data-akun" data-toggle="tab"><i></i>Data Akun</a></li>
			</ul>
		</div>
		<!-- // Widget heading END -->
		
		<div class="widget-body">
			<!-- Tampilkan Pesan Flash Data -->
			<?php echo !empty($error) ? '<p class="gagal">' . $error . '</p>' : '';?>
			<?php echo !empty($pesan) ? '<p class="sukses">' . $pesan . '</p>' : '';?>
			<!-- Form -->
			<?php 
				$attrib	= array('class'	=> 'form-horizontal margin-none',
										'name'	=> 'form_input',
										'method'	=> 'post');
				echo form_open_multipart('index.php/account/ubahDataAkun',$attrib);
			?>	
			<div class="tab-content">
				
					
					<!-- Form -->
					<?php 
					//	$attrib	= array('class'	=> 'form-horizontal margin-none',
						//						'name'	=> 'form_input',
							//					'method'	=> 'post');
						//echo form_open_multipart('index.php/account/ubahDataAkun',$attrib);
					?>	
					<!-- Tab content -->
					<div class="tab-pane active" id="data-akun">
					
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
								<input type="text" id="inputUsername" class="span10" value="<?php echo $username ?>" disabled="disabled" />
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
						
						<!-- Form actions -->
						<div class="form-actions" style="margin: 0;">
							<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Simpan</button>
							<button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Batal</button>
						</div>
						<!-- // Form actions END -->
						
					</div>
					<!-- // Tab content END -->
				</div>
			</form>
		</div>
	</div>
	<!-- // Widget END -->
	
</div>	