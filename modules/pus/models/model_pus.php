<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_pus extends CI_Model
{

	/** function save Pus
	------------------------------------------------------------------------ **/
	function savePus($npm,$permohonan,$dokter,$obat,$lainnya,$status,$tgl_pengajuan) 
	{
		$sql = "INSERT INTO fe_pus(npm,permohonan,dokter,obat,lainnya,status,tgl_pengajuan) 
					VALUES (".$this->db->escape($npm).","
								.$this->db->escape($permohonan).","
								.$this->db->escape($dokter).","
								.$this->db->escape($obat).","
								.$this->db->escape($lainnya).","
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
/* End of file model_pus.php */
/* Location: ./modules/pus/models/model_pus.php */