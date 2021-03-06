<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller 
{

	/** function construct
	------------------------------------------------------------------------ **/
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('feun_abus') <> 'true') 
		 {
			 $this->session->sess_destroy();
			 header('location: '.base_url());
			 exit;
		 }
		$this->load->model('main_models','model_account');
		$this->load->helper("url");
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	function index()
	{
		$this->dashboard();
	}
	
	public function dashboard()
	{		
		$id_user=$this->security->xss_clean($this->session->userdata('feun_id'));
		//cek dulu id ada di table ga
		if($user=$this->model_account->ambilUser($id_user)){
			//Pesan sukses atau gagal
			$data['error']			= $this->session->flashdata('gagal');
			$data['pesan']			= $this->session->flashdata('sukses');
			$data['user']			= $user;
			$this->template->load('main_views','view_dashboard',$data);
		} else {
			header('location:'.base_url());
		}
	}
}
/* End of file account.php */
/* Location: ./modules/account/controllers/account.php */