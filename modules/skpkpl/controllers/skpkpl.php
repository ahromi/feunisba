<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skpkpl extends MX_Controller 
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
		$this->load->model('model_skpkpl');
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	public function index()
	{
		$this->skpkpl();
	}
	
	public function skpkpl()
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

			 
			 $this->template->load('main_views','view_skpkpl',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	function inputSkpkpl()
	{
		
		
		$created		= date('Y-m-d H:i:s');
		$pengguna	= $this->session->userdata('feun_username');
		$cekphoto1	= $_FILES['files']['name'][0];
		$cekphoto2	= $_FILES['files']['name'][1];
		$cekphoto3	= $_FILES['files']['name'][2];
		$cekphoto4	= $_FILES['files']['name'][3];
		$cekphoto5	= $_FILES['files']['name'][4];
		$cekphoto6	= $_FILES['files']['name'][5];
		if(!$cekphoto1 && !$cekphoto2 && !$cekphoto3 && !$cekphoto4 && !$cekphoto5 && !$cekphoto6) 
		{
			$this->session->set_flashdata('gagal', 'Pilih file yang akan diunggah, silakan ulangi kembali');
			header('location: '.base_url().'index.php/skpkpl');
		}else
		{
			$main_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/"); //Buka Directory Utama untuk Upload data
			$pengguna_dir	= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna); //Buka directory pengguna
			$modul_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpkpl");
				
			if(false == readdir($pengguna_dir)) //Jika Tidak ditemukan Directory Pengguna, Maka
			{
				mkdir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpkpl",0777,true); //Buat Directory Baru (Recursive), yakni dirctory pengguna dan directory modul
			}else if(false == readdir($modul_dir))												//Jika ditemukan directory pengguna, maka
			{
				mkdir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpkpl",0777);						//Hanya buat directory modul saja.
			}else 
			{
				closedir($modul_dir);
			}
    		
			//$namafile						= $cekpoto;
			$config['upload_path']		= dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skpkpl";
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
				header('location: '.base_url().'index.php/skpkpl');
			}
			else
			{
				$npm						= $pengguna;
				//Ambil data post dari field Data Fakultas & Prodi Asal
				$fakultasTujuan		= $this->security->xss_clean($this->input->post('fakultas_tujuan'));
				$prodiTujuan			= $this->security->xss_clean($this->input->post('prodi_tujuan'));
				$permohonan				= str_replace(' ', '_', $_FILES['files']['name'][0]);//Mengganti karakter spasi dengan underscores
				$dpp						= str_replace(' ', '_', $_FILES['files']['name'][1]);//Mengganti karakter spasi dengan underscores
				$rekomendasi			= str_replace(' ', '_', $_FILES['files']['name'][2]);//Mengganti karakter spasi dengan underscores
				$koperasi				= str_replace(' ', '_', $_FILES['files']['name'][3]);//Mengganti karakter spasi dengan underscores
				$perpustakaan			= str_replace(' ', '_', $_FILES['files']['name'][4]);//Mengganti karakter spasi dengan underscores
				$transkrip				= str_replace(' ', '_', $_FILES['files']['name'][5]);//Mengganti karakter spasi dengan underscores
				$status					= '0';
				$tgl_pengajuan			= $created;
				
				$this->model_skpkpl->saveSkpkpl($npm,$fakultasTujuan,$prodiTujuan,$permohonan,$dpp,$rekomendasi,$koperasi,$perpustakaan,$transkrip,$status,$tgl_pengajuan);
				$this->session->set_flashdata('sukses', 'Berkas berhasil diunggah');
				header('location: '.base_url().'index.php/skpkpl');
			}
		}
	}
}

/* End of file skpkpl.php */
/* Location: ./modules/skpkpl/controllers/skpkpl.php */