<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_skpkpl extends CI_Model
{

	/** function save Skpkpl
	------------------------------------------------------------------------ **/
	function saveSkpkpl($npm,$fakultasTujuan,$prodiTujuan,$permohonan,$dpp,$rekomendasi,$koperasi,$perpustakaan,$transkrip,$status,$tgl_pengajuan) 
	{
		$sql = "INSERT INTO fe_skpkpl(npm,fakultas_tujuan,prodi_tujuan,permohonan,dpp,rekomendasi,koperasi,perpustakaan,transkrip,status,tgl_pengajuan) 
					VALUES (".$this->db->escape($npm).","
								.$this->db->escape($fakultasTujuan).","
								.$this->db->escape($prodiTujuan).","
								.$this->db->escape($permohonan).","
								.$this->db->escape($dpp).","
								.$this->db->escape($rekomendasi).","
								.$this->db->escape($koperasi).","
								.$this->db->escape($perpustakaan).","
								.$this->db->escape($transkrip).","
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
/* End of file model_skpkpl.php */
/* Location: ./modules/skpkpl/models/model_skpkpl.php */