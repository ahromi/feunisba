<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_spck extends CI_Model
{

	/** function save Spck
	------------------------------------------------------------------------ **/
	function saveSpck($npm,$dpp,$status,$tgl_pengajuan) 
	{
		$sql = "INSERT INTO fe_spck(npm,dpp,status,tgl_pengajuan) 
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
	function listSpck() 
	{
		$sql="SELECT *
				FROM fe_spck LEFT JOIN (fe_mahasiswa, fe_prodi) ON (fe_spck.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode) ORDER BY fe_spck.idfe_spck";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	
	/** function detail SPCK
	------------------------------------------------------------------------ **/
	public function detailSpck($id) 
	{
		$sql="SELECT *
				FROM fe_spck LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu) ON (fe_spck.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_spck.npm=fe_ortu.npm) WHERE idfe_spck=".$id." ORDER BY fe_spck.idfe_spck";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	/** function update proses Spck
	------------------------------------------------------------------------ **/
	function prosesSpck($id,$noSurat,$ttd,$status,$tgl_pemrosesan)
	{
		$sql = "UPDATE fe_spck
					 SET  no_surat = ".$this->db->escape($noSurat).", 
					 		ttd = ".$this->db->escape($ttd).",
					 		status = ".$this->db->escape($status).", 
					 		tgl_pemrosesan = ".$this->db->escape($tgl_pemrosesan)."
					 WHERE idfe_spck=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function update proses Spck 2
	------------------------------------------------------------------------ **/
	function updateSpck($id,$status,$tgl_pengesahan)
	{
		$sql = "UPDATE fe_spck
					 SET status = ".$this->db->escape($status).", 
					 		tgl_pengesahan = ".$this->db->escape($tgl_pengesahan)."
					 WHERE idfe_spck=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function cetak spck
	------------------------------------------------------------------------ **/
	function cetakSpck($id)
	{
		$sql="SELECT *
				FROM fe_spck LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu, fe_dosen) ON (fe_spck.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_spck.npm=fe_ortu.npm AND fe_spck.ttd=fe_dosen.nik) WHERE idfe_spck=".$id." ORDER BY idfe_spck";
				
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
/* End of file model_spck.php */
/* Location: ./modules/spck/models/model_spck.php */