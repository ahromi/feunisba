<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_sm extends CI_Model
{

	/** function save Sm
	------------------------------------------------------------------------ **/
	function saveSm($npm,$judulSkripsi,$bidangSkripsi,$matakuliah,$dosenPembimbing,$anggota,$namaPerusahaan,$alamatPerusahaan,$status,$tgl_pengajuan) 
	{
		$sql = "INSERT INTO fe_sm(npm,judul_skripsi,bidang_skripsi,matakuliah,dosen_pembimbing,anggota,nama_perusahaan,
											alamat_perusahaan,status,tgl_pengajuan) 
					VALUES (".$this->db->escape($npm).","
								.$this->db->escape($judulSkripsi).","
								.$this->db->escape($bidangSkripsi).","
								.$this->db->escape($matakuliah).","
								.$this->db->escape($dosenPembimbing).","
								.$this->db->escape($anggota).","
								.$this->db->escape($namaPerusahaan).","
								.$this->db->escape($alamatPerusahaan).","
								.$this->db->escape($status).","
								.$this->db->escape($tgl_pengajuan)
								.")";
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function hitung jumlah data Spak
	------------------------------------------------------------------------ **/
	public function countSpak() 
	{
        $sql = "SELECT count(id) as jml 
				FROM fe_spak";
		$hasil =  $this->db->query($sql);
		return $hasil->result_array();
    }
	
	/** function list user
	------------------------------------------------------------------------ **/
	public function listSpak() 
	{
		$sql="SELECT *
				FROM fe_spak ORDER BY id";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	/** function cetak spak
	------------------------------------------------------------------------ **/
	public function cetakSpak($id)
	{
		$sql="SELECT *
				FROM fe_spak WHERE id=".$id." ORDER BY id";
				
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
      
      
	}

}
/* End of file model_sm.php */
/* Location: ./modules/sm/models/model_sm.php */