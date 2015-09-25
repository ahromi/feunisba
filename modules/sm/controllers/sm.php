<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sm extends MX_Controller 
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
		$this->load->model('model_sm');
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	function index()
	{
		$this->sm();
	}
	
	function sm()
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

			 
			 $this->template->load('main_views','view_sm',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	function inputSm()
	{
		//Ambil data post dari field Data Penelitian
		$judulSkripsi			= $this->security->xss_clean($this->input->post('judul_skripsi'));
		$bidangSkripsi			= $this->security->xss_clean($this->input->post('bidang_skripsi'));
		$matakuliah				= $this->security->xss_clean($this->input->post('matakuliah'));
		$dosenPembimbing		= $this->security->xss_clean($this->input->post('dosen_pembimbing'));
		$anggota					= $this->security->xss_clean($this->input->post('anggota'));
		$namaPerusahaan		= $this->security->xss_clean($this->input->post('nama_perusahaan'));
		$alamatPerusahaan		= $this->security->xss_clean($this->input->post('alamat_perusahaan'));
		
		$npm						= $this->session->userdata('feun_username');
		$pdp						= str_replace(' ', '_', $_FILES['userfile']['name']);//Mengganti karakter spasi dengan underscores
		$status					= '0';
		$tgl_pengajuan			= date('Y-m-d H:i:s');;
		
		$input_sm				= $this->model_sm->saveSm($npm,$judulSkripsi,$bidangSkripsi,$matakuliah,$dosenPembimbing,$anggota,$namaPerusahaan,$alamatPerusahaan,$status,$tgl_pengajuan);
		if($input_sm)
		{
			$this->session->set_flashdata('sukses', 'Surat Survai Magang berhasil diajukan');
			header('location: '.base_url().'index.php/sm');
		}else
		{
			$this->session->set_flashdata('gagal', 'Surat Survai Magang belum berhasil diajukan, silakan ulangi kembali');
			header('location: '.base_url().'index.php/sm');
		}		
	}
}

/* End of file sm.php */
/* Location: ./modules/sm/controllers/sm.php */

