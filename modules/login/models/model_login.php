<?php
/** no direct access
============================================================================ **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/** define class
============================================================================ **/
class Model_login extends CI_Model {

	/** function construct
	------------------------------------------------------------------------ **/
	function construct()
	{
		parent::__construct();
	}
	
	/** function masuk
	------------------------------------------------------------------------ **/
	function masuk($username, $password)
	{
		$q="SELECT id_user, id_usertype, username, fullname, password, email_user, private_key
				FROM fe_user WHERE username=".$this->db->escape($username)." LIMIT 1";
		$sql=$this->db->query($q);
		
			$data=$sql->result_array();
        if ($sql->num_rows() == 1) 
		{ 
			$crypt1 = '';
			$getpasword = '';
			require_once ('system/libraries/joomla-helper.php');
            $cryptsalt = $data[0]['password'];
			list($crypt,$salt) = explode(":",$cryptsalt);
			$crypt1 = joomlauser::getCryptedPassword($password,$salt);
			$getpasword = $crypt1.':'.$salt;
			if ($cryptsalt == $getpasword){ 
				return $data;
			} else {
				return FALSE;
			}
				
        } else {
            return FALSE;
        }
	}
	
	/** function get rule
	------------------------------------------------------------------------ **/
	function get_rule($id_usertype)
	{
		$sql="SELECT id_menu FROM itcore_rule WHERE tag='1' AND id_usertype=".$this->db->escape($id_usertype);
		$hasil = $this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function get usergroup
	------------------------------------------------------------------------ **/
	function get_usergroup($id_user)
	{
		$sql="SELECT id_groups FROM itcore_usergroups WHERE tag='1' AND id_user=".$this->db->escape($id_user);
		$hasil = $this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function cek hit
	------------------------------------------------------------------------ **/
	function cek_hit($ip,$session_id)
	{
		$sql="SELECT COUNT(id_hit) jum	FROM itcore_hit WHERE ip=".$this->db->escape($ip)." AND session=".$this->db->escape($session_id);
		$hasil = $this->db->query($sql);
		return $hasil->result_array();
	}
	
	/** function insert hit
	------------------------------------------------------------------------ **/
	function insert_hit($ip,$session_id,$os,$browser,$url,$auth,$description)
	{
		$sql="INSERT INTO itcore_hit(ip,session,os,browser,url,auth,description) VALUES(".$this->db->escape($ip).",".$this->db->escape($session_id).",".$this->db->escape($os).",".$this->db->escape($browser).",".$this->db->escape($url).",".$this->db->escape($auth).",".$this->db->escape($description).")";
		return $this->db->query($sql);
	}

	/** function insert log
	------------------------------------------------------------------------ **/
	function log_insert($log)
	{
		require_once('system/libraries/func.php');
		$ip=getRealIpAddr();
		$session_id = $this->session->userdata('session_id');
		$auth=$this->session->userdata('itlogin_id');	
		
		$sql="INSERT INTO itcore_log (ip,session,auth,description) VALUES(".$this->db->escape($ip).",".$this->db->escape($session_id).",".$this->db->escape($auth).",".$this->db->escape($log).")";
		return $this->db->query($sql);
	}		

	/** function get url
	------------------------------------------------------------------------ **/
	function get_url()
	{
		$username=$this->session->userdata('itlogin_username');
		$getvar=$this->input->get();
				$var='';
				if(is_array($getvar))
				{	
					$var= '?'.http_build_query($getvar, '', "&");
				}
				$url= $username."**".base_url()."".$_SERVER['PATH_INFO']."".$var;
		return $url;
	}
	/** function cek id menu
	------------------------------------------------------------------------ **/
	function cek_idmenu()
	{
		$url=$this->login_model->get_url();
		//if(!$this->input->get('idm') && !$this->input->get('idr')&& !isset($_COOKIE["idm"]))
		if(!$this->input->get('idm') && !$this->input->get('idr')&& !$this->session->userdata('idm'))	
		
		{
			//--------insert log------------	
			$log="CEK-MENU**NO_ID**FALSE**".$url;
			$this->log_insert($log);
			header('location:'.base_url().'error');	
		}
		else //if($this->input->get('idm') || $this->input->get('idr'))
		{
			if($this->input->get('idm')){
				$id=$this->security->xss_clean(str_replace(" ","+",$this->input->get('idm',true)));
			}
			else if($this->input->get('idr')){
				$id=$this->security->xss_clean(str_replace(" ","+",$this->input->get('idr',true)));
			}
			else{
				//$id=$_COOKIE["idm"];
				$id=$this->session->userdata("idm");
			}
			$id_menu=$this->encrypt->decode($id);
			if (is_numeric($id_menu))
			{
				$list=explode(',', $this->session->userdata('itlogin_rule'));
				$list_menu=array();
				foreach($list as $lis){
					$list_menu[]=$lis;	
				}
				if(in_array($id_menu,$list_menu))
				{
					
					$sql="SELECT link FROM itcore_menu WHERE id_menu='$id_menu'";
					$hasil=$this->db->query($sql);
					if($data=$hasil->result_array())
					{
						$link=$data[0]['link'];
						$path=explode("/",$_SERVER['PATH_INFO']);
						if($link <> $path[1] )
						{
							//--------insert log------------	
							$log="CEK-MENU**IN_ARRAY**FALSE**path<>id_menu**".$url;
							$this->log_insert($log);
							header('location:'.base_url().'error');
						}
						
					}
							
				}
				else
				{
					//--------insert log------------	
					$log="CEK-MENU**IN_ARRAY**FALSE**".$url;
					$this->log_insert($log);
					header('location:'.base_url().'error');	
				}
					
			}
			else
			{
				//--------insert log------------	
				$log="CEK-MENU**IN_ARRAY**FALSE**".$url;
				$this->log_insert($log);
				header('location:'.base_url().'error');
			}
		}
        
	}
}
/** ======================================================================== **/