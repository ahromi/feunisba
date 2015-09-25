<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	foreach($hasil_cetak as $cetak){
?>
<style>
.paragrap{
   float: left;
   margin-left: 80px;
}
.ketengah{
	float: left;
   margin-left: 30px;
}
</style>

<p align="center">
<font face="Tahoma, sans-serif"><u><b>SURAT KETERANGAN MASIH KULIAH</b></u></font>
</p>
<p lang="en-GB" class="western" align="center" style="margin-top: 0in; line-height: 10%">
<font face="Tahoma, sans-serif"><span lang="en-US"><b>Nomor : <?php echo $cetak->no_surat ?></b></span></font>
</p>
<br>
<br>
<div class="paragrap">
	Yang bertanda tangan dibawah ini : 
	<br>
	<br>
	<table class="ketengah">
	<tr>
		<td class="limapuluh">Nama</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->nama_dosen ?></td>
	</tr>
	<tr>
		<td class="limapuluh">NIK</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->nik ?></td>
	</tr>
	<tr>
		<td class="limapuluh">Jabatan</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->jabatan_dosen ?></td>
	</tr>
	<tr>
		<td class="limapuluh">Pada Perguruan Tinggi</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->univ ?></td>
	</tr>
	</table>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="paragrap">
	Menerangkan dengan sesunguhnya Bahwa : 
	<br>
	<br>
	<table class="ketengah">
	<tr>
		<td class="limapuluh">Nama</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->nama; ?></td>
	</tr>
	<tr>
		<td class="limapuluh">NPM</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->npm; ?></td>
	</tr>
	<tr>
		<td class="limapuluh">Program Studi</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->prodi; ?></td>
	</tr>
	</table>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
<div class="paragrap">
Terdaftar sebagai mahasiswa pada Fakultas Ekonomi dan Bisnis Universitas Islam Bandung Semester Ganjil Tahun Akademik 2014/2015 dan wali anak tersebut adalah:
	<br>
	<br>
	<table class="ketengah">
	<tr>
		<td class="limapuluh">Nama</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->nama_ortu; ?></td>
	</tr>
	<tr>
		<td class="limapuluh">Alamat</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->alamat_ortu; ?></td>
	</tr>
	<tr>
		<td class="limapuluh">Pekerjaan</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->pekerjaan; ?></td>
	</tr>
	<tr>
		<td class="limapuluh">Pangkat/Golongan</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->pangkat; ?></td>
	</tr>
	<tr>
		<td class="limapuluh">NIP/REG</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->nip; ?></td>
	</tr>
	<tr>
		<td class="limapuluh">Jabatan</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->jabatan; ?></td>
	</tr>
<tr>
		<td class="limapuluh">Instansi</td>
		<td class="sepuluh"> : </td>
		<td><?php echo $cetak->instansi; ?></td>
	</tr>
	</table>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
<div class="paragrap">
	Demikian surat keterangan ini  dibuat untuk dipergunakan sebagaimana mestinya.
	<br>
	<br>
	<br>
</div>
<style>
	table, th, td {
		width:100%;
	}
	.sepuluh {
		width:10%;
	}
	.limapuluh {
		width:50%;
	}
</style>
	<table>
		<tr>
			<td padding-right="20px"></td>
			<td padding-right="20px"></td>
			<td padding-right="20px">Bandung, <?php $date = new Datetime($cetak->tgl_pengesahan); echo tgl_indo($date->format('Y-m-d')) ?> </td>
		</tr>
		<tr>
			<td padding="20px"></td>
			<td padding="20px"></td>
			<td padding="20px"><?php echo $cetak->jabatan_dosen; ?>,</td>
		</tr>
		<tr>
			<td padding="50px"></td>
			<td padding="50px"></td>
			<td padding="50px"><img src="<?php echo base_url() ?>common/library/image/<?php echo $cetak->ttd ?>" alt="ttd" width="180px" height="80px" /></td>
		</tr>
		<tr>
			<td padding="20px"></td>
			<td padding="20px"></td>
			<td padding="20px"><?php echo $cetak->nama_dosen; ?></td>
		</tr>
	</table>


<?php
	}
?>