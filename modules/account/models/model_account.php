<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_account extends CI_Model
{

	/** function Edit Data Pribadi
	------------------------------------------------------------------------ **/
	function editDataPribadi($nama,$prodi,$alamat,$kota,$kodepos,$tempatLahir,$tglLahir,$email,$jenkel,$agama,$golDarah,$noTelpon,$npm) 
	{
		$sql = "UPDATE fe_mahasiswa 
					SET nama = ".$this->db->escape($nama).", 
						prodi = ".$this->db->escape($prodi).", 
						alamat = ".$this->db->escape($alamat).", 
						kota = ".$this->db->escape($kota).", 
						kodepos = ".$this->db->escape($kodepos).", 
						tempat_lahir = ".$this->db->escape($tempatLahir).",
						tgl_lahir = ".$this->db->escape($tglLahir).", 
						email = ".$this->db->escape($email).", 
						jenkel = ".$this->db->escape($jenkel).", 
						agama = ".$this->db->escape($agama).",  
						gol_darah = ".$this->db->escape($golDarah).",
						no_telp = ".$this->db->escape($noTelpon)." 
					WHERE npm = ".$this->db->escape($npm)." ";
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function Edit Data Ortu
	------------------------------------------------------------------------ **/
	function editDataOrtu($nama_ortu,$email_ortu,$pendTerakhir,$alamat_ortu,$kota_ortu,$kodepos_ortu,$pekerjaan,$pangkat,$jabatan,$nip,$instansi,$agama_ortu,$noTelpon_ortu,$npm) 
	{
		$sql = "UPDATE fe_ortu 
					SET nama_ortu = ".$this->db->escape($nama_ortu).", 
						alamat_ortu = ".$this->db->escape($alamat_ortu).", 
						kota_ortu = ".$this->db->escape($kota_ortu).", 
						kodepos_ortu = ".$this->db->escape($kodepos_ortu).", 
						pend_terakhir = ".$this->db->escape($pendTerakhir).",
						pekerjaan = ".$this->db->escape($pekerjaan).", 
						pangkat = ".$this->db->escape($pangkat).", 
						nip = ".$this->db->escape($nip).", 
						jabatan = ".$this->db->escape($jabatan).", 
						instansi = ".$this->db->escape($instansi).", 
						agama_ortu = ".$this->db->escape($agama_ortu).", 
						no_telp_ortu = ".$this->db->escape($noTelpon_ortu).", 
						email_ortu = ".$this->db->escape($email_ortu)."
					WHERE npm = ".$this->db->escape($npm)." ";
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function Edit Data Akun
	-------------------------------------------------------------------------- */
	function editDataAkun($id, $password)
	{
		$sql = "UPDATE fe_user 
					SET password = ".$this->db->escape($password)." 
					WHERE id_user = ".$this->db->escape($id)." ";
		
		return $this->db->query($sql);
	}
	
	/** function Edit Photo Akun
	-------------------------------------------------------------------------- */
	function ubahPhotoAkun($id, $photo)
	{
		$sql = "UPDATE fe_mahasiswa 
					SET photo = ".$this->db->escape($photo)." 
					WHERE npm = ".$this->db->escape($id)." ";
		
		return $this->db->query($sql);
	}

}
/* End of file model_account.php */
/* Location: ./modules/account/models/model_account.php */