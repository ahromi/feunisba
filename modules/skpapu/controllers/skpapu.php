<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skpapu extends MX_Controller 
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
		$this->load->model('model_skpapu');
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	public function index()
	{
		$this->skpapu();
	}
	
	public function skpapu()
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
			 
			 //Data Fakultas dan Prodi Asal

			 //Data Akun
			 $data['username']		= $result[0]['username'];
			 
			 //Pesan sukses atau gagal
			 $data['error']			= $this->session->flashdata('gagal');
			 $data['pesan']			= $this->session->flashdata('sukses');

			 
			 $this->template->load('main_views','view_skpapu',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	function inputSkpapu()
	{
		
		
		$created		= date('Y-m-d H:i:s');
		$pengguna	= $this->session->userdata('feun_username');
		$cekphoto1	= $_FILES['files']['name'][0];
		$cekphoto2	= $_FILES['files']['name'][1];
		$cekphoto3	= $_FILES['files']['name'][2];
		if(!$cekphoto1 && !$cekphoto2 && !$cekphoto3) 
		{
			$this->session->set_flashdata('gagal', 'Pilih file yang akan diunggah, silakan ulangi kembali');
			header('location: '.base_url().'index.php/skpapu');
		}else
		{
			$main_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/"); //Buka Directory Utama untuk Upload data
			$pengguna_dir	= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna); //Buka directory pengguna
			$modul_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpapu");
				
			if(false == readdir($pengguna_dir)) //Jika Tidak ditemukan Directory Pengguna, Maka
			{
				mkdir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpapu",0777,true); //Buat Directory Baru (Recursive), yakni dirctory pengguna dan directory modul
			}else if(false == readdir($modul_dir))												//Jika ditemukan directory pengguna, maka
			{
				mkdir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpapu",0777);						//Hanya buat directory modul saja.
			}else 
			{
				closedir($modul_dir);
			}
    		
			//$namafile						= $cekpoto;
			$config['upload_path']		= dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpapu";
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= '5000';
			$config['max_width']  		= '1280';
			$config['max_height']  		= '1024';
			$config['overwrite']			= TRUE;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ( ! $this->upload->do_multi_upload("files"))
			{
				$this->session->set_flashdata('gagal', 'Data gagal diunggah, silakan ulangi kembali');
				header('location: '.base_url().'index.php/skpapu');
			}
			else
			{
				$npm						= $pengguna;
				//Ambil data post dari field Data Fakultas & Prodi Asal
				$fakultasAsal			= $this->security->xss_clean($this->input->post('fakultas_asal'));
				$prodiAsal				= $this->security->xss_clean($this->input->post('prodi_asal'));
				$dpp						= str_replace(' ', '_', $_FILES['files']['name'][0]);//Mengganti karakter spasi dengan underscores
				$rekomendasi			= str_replace(' ', '_', $_FILES['files']['name'][1]);//Mengganti karakter spasi dengan underscores
				$transkrip				= str_replace(' ', '_', $_FILES['files']['name'][2]);//Mengganti karakter spasi dengan underscores
				$status					= '0';
				$tgl_pengajuan			= $created;
				
				$this->model_skpapu->saveSkpapu($npm,$fakultasAsal,$prodiAsal,$dpp,$rekomendasi,$transkrip,$status,$tgl_pengajuan);
				$this->session->set_flashdata('sukses', 'Berkas berhasil diunggah');
				header('location: '.base_url().'index.php/skpapu');
			}
		}
	}
}

/* End of file skpapu.php */
/* Location: ./modules/skpapu/controllers/skpapu.php */