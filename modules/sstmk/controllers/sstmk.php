<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sstmk extends MX_Controller 
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
		$this->load->model('model_sstmk');
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	function index()
	{
		$this->sstmk();
	}
	
	function sstmk()
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

			 
			 $this->template->load('main_views','view_sstmk',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	function inputSstmk()
	{
		//Ambil data post dari field Data Instansi dan Matakuliah
		$matakuliah				= $this->security->xss_clean($this->input->post('matakuliah'));
		$dosenPengampu			= $this->security->xss_clean($this->input->post('dosen_pengampu'));
		$anggota					= $this->security->xss_clean($this->input->post('anggota'));
		$namaInstansi			= $this->security->xss_clean($this->input->post('nama_instansi'));
		$kotaInstansi			= $this->security->xss_clean($this->input->post('kota_instansi'));
		$alamatInstansi		= $this->security->xss_clean($this->input->post('alamat_instansi'));
		
		
		$npm						= $this->session->userdata('feun_username');;
		$status					= '0';
		$tgl_pengajuan			= date('Y-m-d H:i:s');;
		
		$input_sstmk			= $this->model_sstmk->saveSstmk($npm,$matakuliah,$dosenPengampu,$anggota,$namaInstansi,$kotaInstansi,$alamatInstansi,$status,$tgl_pengajuan);
		
		if($input_sstmk)
		{
			$this->session->set_flashdata('sukses', 'Surat Survai Tugas Mata Kuliah berhasil diajukan');
			header('location: '.base_url().'index.php/sstmk');
		}else
		{
			$this->session->set_flashdata('gagal', 'Surat Survai Tugas Mata Kuliah belum berhasil diajukan, silakan ulangi kembali');
			header('location: '.base_url().'index.php/sstmk');
		}	
	}
}

/* End of file sstmk.php */
/* Location: ./modules/sstmk/controllers/sstmk.php */