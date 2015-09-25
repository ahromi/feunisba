<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*
		view_account.php -> Ubah Biodata
	*/
?>
<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo base_url()?>" class="glyphicons notes"><i></i> <?php echo $this->config->item('app_name');?></a></li>
	<li class="divider">|</li>
	<li>Ubah Biodata</li>
</ul>

<h3>Ubah Biodata</h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget widget-tabs border-bottom-none">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a class="glyphicons edit" href="#data-pribadi" data-toggle="tab"><i></i>Data Pribadi</a></li>
				<li><a class="glyphicons edit" href="#data-orangtua" data-toggle="tab"><i></i>Data Orangtua</a></li>
				<!--<li><a class="glyphicons edit" href="#data-akun" data-toggle="tab"><i></i>Data Akun</a></li>-->
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
				echo form_open_multipart('index.php/account/ubahDataPribadi',$attrib);
			?>	
			<div class="tab-content">
				
					<!-- Tab content -->
					<div class="tab-pane active" id="data-pribadi">
					
						<!-- Row -->
						<div class="row-fluid">
						
							<!-- Column -->
							<div class="span6">
							
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="nm_mhs">Nama Lengkap</label>
									<div class="controls"><input class="span12" id="nm_mhs" name="nm_mhs" type="text" value="<?php echo $nm_mhs; ?>" /></div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="npm">NPM</label>
									<div class="controls"><input class="span12" id="npm" name="npm" type="text" value="<?php echo $npm; ?>" disabled="disabled" /></div>
								</div>
								<!-- // Group END -->
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
											$js = 'id="prodi" class="span12"';
											
											echo form_dropdown('prodi', $options, $prodi,$js);
										?>
									</div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="alamat">Alamat</label>
									<div class="controls"><textarea class="span12" id="alamat" name="alamat" rows="4"><?php echo $alamat; ?></textarea></div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Kota</label>
									<div class="controls">
										<div class="input-append">
											<input type="text" id="kota" name="kota" class="span12" value="<?php echo $kota; ?>" />
										</div> Kode Pos 
										<div class="input-append">
											<input type="text" id="kode_pos" name="kode_pos" class="input-mini" value="<?php echo $kode_pos; ?>" />
										</div>
									</div>
								</div>
								<!-- // Group END -->
							</div>
							<!-- // Column END -->
							
							<!-- Column -->
							<div class="span6">
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Tempat, Tgl Lahir</label>
									<div class="controls">
										<div class="input-append">
											<input type="text" id="tempat_lahir" name="tempat_lahir" class="span12" value="<?php echo $tempat_lahir; ?>" />
										</div>, 
										<div class="input-append">
											<input type="text" id="datepicker" name="tgl_lahir" class="span12" value="<?php echo $tgl_lahir; ?>" />
											<span class="add-on glyphicons calendar"><i></i></span>
										</div>
									</div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="email">Email</label>
									<div class="controls"><input class="span12" id="email" name="email" type="text" value="<?php echo $email; ?>" /></div>
								</div>
								<!-- // Group END -->
								
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Jenis Kelamin</label>
									<div class="controls">
										<?php
											$options = array(
											                  '0'  				=> 'Pilih Jenik Kelamin',
											                  'LAKI-LAKI'    => 'Laki-laki',
											                  'PEREMPUAN'  	=> 'Perempuan'
											                );
											$js = 'id="jenkel" class="span12"';
											
											echo form_dropdown('jenkel', $options, $jenkel,$js);
										?>
									</div>
								</div>
								<!-- // Group END -->
								
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Agama</label>
									<div class="controls">
										<input type="text" id="agama" name="agama" class="span12" value="<?php echo $agama; ?>" />
									</div>
								</div>
								<!-- // Group END -->
								
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Golongan Darah</label>
									<div class="controls">
										<input type="text" id="gol_darah" name="gol_darah" class="span12" value="<?php echo $gol_darah; ?>" />
									</div>
								</div>
								<!-- // Group END -->
								
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">No. Telepon</label>
									<div class="controls">
										<input type="text" id="no_telp" name="no_telp" class="span12" value="<?php echo $no_telp; ?>" />
									</div>
								</div>
								<!-- // Group END -->
								
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
					<!--</form>-->
					<!-- Form END -->
					
					<!-- Form -->
					<?php 
						//$attrib	= array('class'	=> 'form-horizontal margin-none',
						//						'name'	=> 'form_input',
						//						'method'	=> 'post');
						//echo form_open_multipart('index.php/account/ubahDataOrtu',$attrib);
					?>	
					
					<!-- Tab content -->
					<div class="tab-pane" id="data-orangtua">
					
						<!-- Row -->
						<div class="row-fluid">
						
							<!-- Column -->
							<div class="span6">
							
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="nm_ortu">Nama Lengkap</label>
									<div class="controls"><input class="span12" id="nm_ortu" name="nm_ortu" type="text" value="<?php echo $nm_ortu; ?>" /></div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="email_ortu">Email</label>
									<div class="controls"><input class="span12" id="email_ortu" name="email_ortu" type="text" value="<?php echo $email_ortu; ?>" /></div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="pend_terakhir">Pend. Terakhir</label>
									<div class="controls"><input class="span12" id="pend_terakhir" name="pend_terakhir" type="text" value="<?php echo $pend_terakhir; ?>" /></div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="alamat_ortu">Alamat</label>
									<div class="controls"><textarea class="span12" id="alamat_ortu" name="alamat_ortu" rows="4"><?php echo $alamat_ortu; ?></textarea></div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Kota</label>
									<div class="controls">
										<div class="input-append">
											<input type="text" id="kota_ortu" name="kota_ortu" class="span12" value="<?php echo $kota_ortu; ?>" />
										</div> Kode Pos 
										<div class="input-append">
											<input type="text" id="kode_pos_ortu" name="kode_pos_ortu" class="input-mini" value="<?php echo $kode_pos_ortu; ?>" />
										</div>
									</div>
								</div>
								<!-- // Group END -->
							</div>
							<!-- // Column END -->
							
							<!-- Column -->
							<div class="span6">
								<!-- Group -->
								<div class="control-group">
									<label class="control-label" for="pekerjaan">Pekerjaan</label>
									<div class="controls"><input class="span12" id="pekerjaan" name="pekerjaan" type="text" value="<?php echo $pekerjaan; ?>" /></div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Pangkat</label>
									<div class="controls">
										<div class="input-append">
											<input type="text" id="pangkat" name="pangkat" class="span12" value="<?php echo $pangkat; ?>" />
										</div> Jabatan 
										<div class="input-append">
											<input type="text" id="jabatan" name="jabatan" class="span12" value="<?php echo $jabatan; ?>" />
										</div>
									</div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">NIP</label>
									<div class="controls">
										<input type="text" id="nip" name="nip" class="span12" value="<?php echo $nip; ?>" />
									</div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Instansi</label>
									<div class="controls">
										<input type="text" id="instansi" name="instansi" class="span12" value="<?php echo $instansi; ?>" />
									</div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">Agama</label>
									<div class="controls">
										<input type="text" id="agama" name="agama_ortu" class="span12" value="<?php echo $agama_ortu; ?>" />
									</div>
								</div>
								<!-- // Group END -->
								<!-- Group -->
								<div class="control-group">
									<label class="control-label">No. Telepon</label>
									<div class="controls">
										<input type="text" id="no_telp" name="no_telp_ortu" class="span12" value="<?php echo $no_telp_ortu; ?>" />
									</div>
								</div>
								<!-- // Group END -->
								
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
					<!--</form>-->
					<!-- Form END -->
					
					<!-- Form -->
					<?php 
					//	$attrib	= array('class'	=> 'form-horizontal margin-none',
						//						'name'	=> 'form_input',
							//					'method'	=> 'post');
						//echo form_open_multipart('index.php/account/ubahDataAkun',$attrib);
					?>	
					<!-- Tab content -->
					<div class="tab-pane" id="data-akun">
					
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
	