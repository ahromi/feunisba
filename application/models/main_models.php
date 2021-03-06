<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Main_models extends CI_Model
{

	/** function construct
	------------------------------------------------------------------------ **/
	function construct()
	{
		parent::__construct();
	}
	
	/** function ambil data user
	------------------------------------------------------------------------ **/
	function ambilUser($id) 
	{
		$sql="SELECT * 
				FROM fe_user 
				WHERE tag='1' and id_user=".$this->db->escape($id);
		$hasil=$this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function ambil data Mahasiswa
	------------------------------------------------------------------------ **/
	function ambilMahasiswa($id)
	{
		$sql="SELECT * 
				FROM fe_mahasiswa 
				WHERE npm=".$this->db->escape($id);
		$hasil=$this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function ambil data Orangtua
	------------------------------------------------------------------------ **/
	function ambilOrtu($id)
	{
		$sql="SELECT * 
				FROM fe_ortu 
				WHERE npm=".$this->db->escape($id);
		$hasil=$this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function ambil data Mahasiswa dan Orangtua
	------------------------------------------------------------------------ **/
	function ambilMhsOrtu($id)
	{
		$sql="SELECT * 
				FROM fe_mahasiswa
				LEFT JOIN (fe_ortu, fe_user)
				ON (fe_mahasiswa.npm=fe_ortu.npm AND fe_mahasiswa.npm=fe_user.username)
				WHERE fe_mahasiswa.npm=".$this->db->escape($id);
		$hasil=$this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function ambil data User Account
	------------------------------------------------------------------------ **/
	function ambilAkun($id)
	{
		$sql="SELECT * 
				FROM fe_user 
				WHERE username=".$this->db->escape($id);
		$hasil=$this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function check password untuk change password
	-------------------------------------------------------------------------- **/
	function checkPassword($id) 
	{
		$this->db->select('password');
		$this->db->from('fe_user');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return $query;
	}
}