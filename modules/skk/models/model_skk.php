<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_skk extends CI_Model
{

	/** function save Skk
	------------------------------------------------------------------------ **/
	function saveSkk($npm,$dpp,$status,$tgl_pengajuan) 
	{
		$sql = "INSERT INTO fe_skk(npm,dpp,status,tgl_pengajuan) 
					VALUES (".$this->db->escape($npm).","
								.$this->db->escape($dpp).","
								.$this->db->escape($status).","
								.$this->db->escape($tgl_pengajuan)
								.")";
		//echo $sql;
		return $this->db->query($sql);
	}
	
	
	/** function list user
	------------------------------------------------------------------------ **/
	function listSkk() 
	{
		$sql="SELECT *
				FROM fe_skk LEFT JOIN (fe_mahasiswa, fe_prodi) ON (fe_skk.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode) ORDER BY fe_skk.idfe_skk";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	
	/** function detail SKK
	------------------------------------------------------------------------ **/
	public function detailSkk($id) 
	{
		$sql="SELECT *
				FROM fe_skk LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu) ON (fe_skk.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_skk.npm=fe_ortu.npm) WHERE idfe_skk=".$id." ORDER BY fe_skk.idfe_skk";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	/** function update proses Skk
	------------------------------------------------------------------------ **/
	function prosesSkk($id,$noSurat,$ttd,$status,$tgl_pemrosesan)
	{
		$sql = "UPDATE fe_skk
					 SET  no_surat = ".$this->db->escape($noSurat).", 
					 		ttd = ".$this->db->escape($ttd).",
					 		status = ".$this->db->escape($status).", 
					 		tgl_pemrosesan = ".$this->db->escape($tgl_pemrosesan)."
					 WHERE idfe_skk=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function update proses Skk 2
	------------------------------------------------------------------------ **/
	function updateSkk($id,$status,$tgl_pengesahan)
	{
		$sql = "UPDATE fe_skk
					 SET status = ".$this->db->escape($status).", 
					 		tgl_pengesahan = ".$this->db->escape($tgl_pengesahan)."
					 WHERE idfe_skk=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function cetak skk
	------------------------------------------------------------------------ **/
	function cetakSkk($id)
	{
		$sql="SELECT *
				FROM fe_skk LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu, fe_dosen) ON (fe_skk.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_skk.npm=fe_ortu.npm AND fe_skk.ttd=fe_dosen.nik) WHERE idfe_skk=".$id." ORDER BY idfe_skk";
				
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
/* End of file model_skk.php */
/* Location: ./modules/skk/models/model_skk.php */