<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_sktmb extends CI_Model
{

	/** function save Sktmb
	------------------------------------------------------------------------ **/
	function saveSktmb($npm,$tingkat,$semester,$dpp,$status,$tgl_pengajuan) 
	{
		$sql = "INSERT INTO fe_sktmb(npm,tingkat,semester,dpp,status,tgl_pengajuan) 
					VALUES (".$this->db->escape($npm).","
								.$this->db->escape($tingkat).","
								.$this->db->escape($semester).","
								.$this->db->escape($dpp).","
								.$this->db->escape($status).","
								.$this->db->escape($tgl_pengajuan)
								.")";
		//echo $sql;
		return $this->db->query($sql);
	}
	
	
	/** function list user
	------------------------------------------------------------------------ **/
	function listSktmb() 
	{
		$sql="SELECT *
				FROM fe_sktmb LEFT JOIN (fe_mahasiswa, fe_prodi) ON (fe_sktmb.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode) ORDER BY fe_sktmb.idfe_sktmb";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	
	/** function detail SKTMB
	------------------------------------------------------------------------ **/
	public function detailSktmb($id) 
	{
		$sql="SELECT *
				FROM fe_sktmb LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu) ON (fe_sktmb.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_sktmb.npm=fe_ortu.npm) WHERE idfe_sktmb=".$id." ORDER BY fe_sktmb.idfe_sktmb";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	/** function update proses Sktmb
	------------------------------------------------------------------------ **/
	function prosesSktmb($id,$noSurat,$ttd,$status,$tgl_pemrosesan)
	{
		$sql = "UPDATE fe_sktmb
					 SET  no_surat = ".$this->db->escape($noSurat).", 
					 		ttd = ".$this->db->escape($ttd).",
					 		status = ".$this->db->escape($status).", 
					 		tgl_pemrosesan = ".$this->db->escape($tgl_pemrosesan)."
					 WHERE idfe_sktmb=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function update proses Sktmb 2
	------------------------------------------------------------------------ **/
	function updateSktmb($id,$status,$tgl_pengesahan)
	{
		$sql = "UPDATE fe_sktmb
					 SET status = ".$this->db->escape($status).", 
					 		tgl_pengesahan = ".$this->db->escape($tgl_pengesahan)."
					 WHERE idfe_sktmb=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function cetak sktmb
	------------------------------------------------------------------------ **/
	function cetakSktmb($id)
	{
		$sql="SELECT *
				FROM fe_sktmb LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu, fe_dosen) ON (fe_sktmb.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_sktmb.npm=fe_ortu.npm AND fe_sktmb.ttd=fe_dosen.nik) WHERE idfe_sktmb=".$id." ORDER BY idfe_sktmb";
				
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
/* End of file model_sktmb.php */
/* Location: ./modules/sktmb/models/model_sktmb.php */