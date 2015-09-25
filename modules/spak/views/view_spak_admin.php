<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Untuk Mengaktifkan icon link Form pada top menu*/
	echo $css_menu;
	/*
		view_spak_admin.php -> Forms | View Admin SPAK
	*/
?>
<ul class="breadcrumb">
	<li>Lokasi : </li>
	<li><a href="<?php echo site_url() ?>" class="glyphicons home"><i></i> Administrator SPAM FEUNISBA</a></li>
	<li class="divider"> | </li>
	<li>Forms</li>
	<li class="divider"> | </li>
	<li>Admin SPAK</li>
</ul>

<h3>Admin SPAK</h3>
<div class="innerLR">
	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">
		<div class="widget-body">
		
			<!-- Table -->
			<table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white ">
			
				<!-- Table heading -->
				<thead>
					<tr>
						<th style="width: 1%;" class="center">No.</th>
						<th>Nama</th>
						<th style="width: 1%;" class="center">NPM</th>
						<th>Prodi</th>
						<th>Status</th>
						<th class="center">Tgl Pengajuan</th>
						<th class="center">Tgl Pemrosesan</th>
						<th class="center">Tgl Pengesahan</th>
						<th class="center">Action</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
					<?php
					if($hasil!=''){ $i = 1;
									foreach($hasil as $data){ ?>
					<!-- Table row -->
					<tr class="gradeC">
						<td class="center"><?php echo $i++."."; ?></td>
						<td><?php echo $data->nama?></td>
						<td class="center"><?php $pengguna = $data->npm; echo $pengguna; ?></td>
						<td><?php echo $data->prodi?></td>
						<td>
							<?php 
								if($data->status =='0') 
								{  
									echo 'Belum Diproses';
								}elseif($data->status=='1')
								{ 
									echo 'Sudah Diproses';
								}else
								{
									echo 'Sudah Dicetak';
								}
							?>
						</td>
						<td class="center"><?php echo $data->tgl_pengajuan?></td>
						<td class="center"><?php echo $data->tgl_pemrosesan?></td>
						<td class="center"><?php echo $data->tgl_pengesahan?></td>
						<td class="center"><?php
									
									if($data->status =='0') 
										{  
											echo '<span data-toggle="tooltip" data-original-title="Proses SPAK" data-placement="left"><a href="spak/lihatDetailSpak?zXdu87='.$data->idfe_spak.'" class="btn-action glyphicons pencil btn-warning"><i></i></a></span>';
											//echo ' ';
											//echo anchor('index.php/spak/lihatDetailSpak?zXdu87='.$data->idfe_spak,'Proses');
											
										}elseif($data->status=='1')
										{ 
											echo '<span data-toggle="tooltip" data-original-title="Cetak SPAK" data-placement="left"><a href="spak/cetakSpak?zXdu87='.$data->idfe_spak.'" class="btn-action glyphicons print btn-success"><i></i></a></span>';
											//echo ' ';
											//echo anchor('index.php/spak/cetakSpak?zXdu87='.$data->idfe_spak,'Cetak');
										}else
										{
											echo '<span data-toggle="tooltip" data-original-title="Cetak Lagi SPAK" data-placement="left"><a href="spak/cetakSpak?zXdu87='.$data->idfe_spak.'" class="btn-action glyphicons print btn-inverse"><i></i></a></span>';
											//echo ' ';
											//echo anchor('index.php/spak/cetakSpak?zXdu87='.$data->idfe_spak,'Cetak Lagi');
										}
							?>
						</td>
					</tr><?php }}else{ echo "Data Tidak Ditemukan";}
						
					?>
					<!-- // Table row END -->
					
				</tbody>
				<!-- // Table body END -->
				
			</table>
			<!-- // Table END -->			
			
	</div>		
		<!-- // Widget END -->
		
</div>

<script type="text/javascript">
//Load data DPP terakhir ke modal
/*$('#lihat-dpp').on('shown', function()
{
	var modal = $(this);
	// load content with AJAX
	$.ajax({
		url: '/var/www/html/uploads/10090100003/irfan/JPG',
		success: function(data){
  			modal.find('.modal-body').html(data);
		}
	});
});*/

</script>

<br />
<br />