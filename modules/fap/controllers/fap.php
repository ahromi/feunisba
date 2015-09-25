<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fap extends MX_Controller 
{

	/** function construct
	------------------------------------------------------------------------ **/
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('feun_abus') <> 'true') 
		 {
			 $this->session->sess_destroy();
			 header('location: '.base_url());
			 exit;
		 }
		$this->load->model('model_fap');
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	public function index()
	{
		$this->fap();
	}
	
	public function fap()
	{
		$data['css_menu']	= '<script>
									document.getElementById("dashboard").className = "";
									document.getElementById("forms_menu").className = "mega-menu active";
									</script>';
		$npm=$this->security->xss_clean($this->session->userdata('feun_key'));
		$result = $this->main_models->ambilMhsOrtu($npm);
									  
		if ( $result == TRUE) //apabila dilempar dari model true
		{ 	
			 //Ambil data array kemudian passing string ke view
			 //Data Pribadi
			 $data['nm_mhs']			= $result[0]['nama'];
			 $data['npm']				= $result[0]['npm'];
			 $data['prodi']			= $result[0]['prodi'];
			 $data['email']			= $result[0]['email'];
			 

			 //Data Akun
			 $data['username']		= $result[0]['username'];
			 
			 //Pesan sukses atau gagal
			 $data['error']			= $this->session->flashdata('gagal');
			 $data['pesan']			= $this->session->flashdata('sukses');

			 
			 $this->template->load('main_views','view_fap',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	function inputFap()
	{
		//Ambil data post dari field Data Aduan
		$jenisAduan				= $this->security->xss_clean($this->input->post('jenis_aduan'));
		$keterangan				= $this->security->xss_clean($this->input->post('keterangan'));
				
		$npm						= $this->session->userdata('feun_username');
		$status					= '0';
		$tgl_pengajuan			= date('Y-m-d H:i:s');
		
		$inputFap				= $this->model_fap->saveFap($npm,$jenisAduan,$keterangan,$status,$tgl_pengajuan);
		if($inputFap)
		{
			$this->session->set_flashdata('sukses', 'Form Aduan Perkuliahan berhasil diajukan');
			header('location: '.base_url().'index.php/fap');
		}else
		{
			$this->session->set_flashdata('gagal', 'Form Aduan Perkuliahan belum berhasil diajukan, silakan ulangi kembali');
			header('location: '.base_url().'index.php/fap');
		}	
	}
}
/* End of file fap.php */
/* Location: ./modules/fap/controllers/fap.php */