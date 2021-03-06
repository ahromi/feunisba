<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_spak extends CI_Model
{

	/** function save Spak
	------------------------------------------------------------------------ **/
	function saveSpak($npm,$dpp,$status,$tgl_pengajuan)
	{
		$sql = "INSERT INTO fe_spak(npm,dpp,status,tgl_pengajuan) 
					VALUES (".$this->db->escape($npm).","
								.$this->db->escape($dpp).","
								.$this->db->escape($status).","
								.$this->db->escape($tgl_pengajuan)
								.")";
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function update proses Spak
	------------------------------------------------------------------------ **/
	function prosesSpak($id,$noSurat,$ttd,$status,$tgl_pemrosesan)
	{
		$sql = "UPDATE fe_spak
					 SET  no_surat = ".$this->db->escape($noSurat).", 
					 		ttd = ".$this->db->escape($ttd).",
					 		status = ".$this->db->escape($status).", 
					 		tgl_pemrosesan = ".$this->db->escape($tgl_pemrosesan)."
					 WHERE idfe_spak=".$this->db->escape($id)." ";
		
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
	
	/** function list SPAK
	------------------------------------------------------------------------ **/
	public function listSpak() 
	{
		$sql="SELECT *
				FROM fe_spak LEFT JOIN (fe_mahasiswa, fe_prodi) ON (fe_spak.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode) ORDER BY fe_spak.idfe_spak";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	/** function detail SPAK
	------------------------------------------------------------------------ **/
	public function detailSpak($id) 
	{
		$sql="SELECT *
				FROM fe_spak LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu) ON (fe_spak.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_spak.npm=fe_ortu.npm) WHERE idfe_spak=".$id." ORDER BY fe_spak.idfe_spak";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	/** function update proses Spak 2
	------------------------------------------------------------------------ **/
	function updateSpak($id,$status,$tgl_pengesahan)
	{
		$sql = "UPDATE fe_spak
					 SET status = ".$this->db->escape($status).", 
					 		tgl_pengesahan = ".$this->db->escape($tgl_pengesahan)."
					 WHERE idfe_spak=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function cetak spak
	------------------------------------------------------------------------ **/
	public function cetakSpak($id)
	{
		$sql="SELECT *
				FROM fe_spak LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu, fe_dosen) ON (fe_spak.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_spak.npm=fe_ortu.npm AND fe_spak.ttd=fe_dosen.nik) WHERE idfe_spak=".$id." ORDER BY idfe_spak";
				
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
/* End of file model_spak.php */
/* Location: ./modules/spak/models/model_spak.php */