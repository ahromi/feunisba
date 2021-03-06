<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_skb extends CI_Model
{

	/** function save Skb
	------------------------------------------------------------------------ **/
	function saveSkb($npm,$tingkat,$semester,$tahun_akademik,$dpp,$status,$tgl_pengajuan) 
	{
		$sql = "INSERT INTO fe_skb(npm,tingkat,semester,tahun_akademik,dpp,status,tgl_pengajuan) 
					VALUES (".$this->db->escape($npm).","
								.$this->db->escape($tingkat).","
								.$this->db->escape($semester).","
								.$this->db->escape($tahun_akademik).","
								.$this->db->escape($dpp).","
								.$this->db->escape($status).","
								.$this->db->escape($tgl_pengajuan)
								.")";
		//echo $sql;
		return $this->db->query($sql);
	}
	
	
	/** function list user
	------------------------------------------------------------------------ **/
	function listSkb() 
	{
		$sql="SELECT *
				FROM fe_skb LEFT JOIN (fe_mahasiswa, fe_prodi) ON (fe_skb.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode) ORDER BY fe_skb.idfe_skb";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	
	/** function detail SKB
	------------------------------------------------------------------------ **/
	public function detailSkb($id) 
	{
		$sql="SELECT *
				FROM fe_skb LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu) ON (fe_skb.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_skb.npm=fe_ortu.npm) WHERE idfe_skb=".$id." ORDER BY fe_skb.idfe_skb";
		$query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	/** function update proses Skb
	------------------------------------------------------------------------ **/
	function prosesSkb($id,$noSurat,$ttd,$status,$tgl_pemrosesan)
	{
		$sql = "UPDATE fe_skb
					 SET  no_surat = ".$this->db->escape($noSurat).", 
					 		ttd = ".$this->db->escape($ttd).",
					 		status = ".$this->db->escape($status).", 
					 		tgl_pemrosesan = ".$this->db->escape($tgl_pemrosesan)."
					 WHERE idfe_skb=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function update proses Skb 2
	------------------------------------------------------------------------ **/
	function updateSkb($id,$status,$tgl_pengesahan)
	{
		$sql = "UPDATE fe_skb
					 SET status = ".$this->db->escape($status).", 
					 		tgl_pengesahan = ".$this->db->escape($tgl_pengesahan)."
					 WHERE idfe_skb=".$this->db->escape($id)." ";
		
		//echo $sql;
		return $this->db->query($sql);
	}
	
	/** function cetak skb
	------------------------------------------------------------------------ **/
	function cetakSkb($id)
	{
		$sql="SELECT *
				FROM fe_skb LEFT JOIN (fe_mahasiswa, fe_prodi, fe_ortu, fe_dosen) ON (fe_skb.npm=fe_mahasiswa.npm AND fe_mahasiswa.prodi=fe_prodi.kode AND fe_skb.npm=fe_ortu.npm AND fe_skb.ttd=fe_dosen.nik) WHERE idfe_skb=".$id." ORDER BY idfe_skb";
				
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
/* End of file model_skb.php */
/* Location: ./modules/skb/models/model_skb.php */