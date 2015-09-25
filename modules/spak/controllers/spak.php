<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spak extends MX_Controller 
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
		 $this->load->model('model_spak');//load model for spak
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	public function index()
	{
		if($this->session->userdata('feun_usertype')==3)
		{
			$this->spak();
		}
		elseif($this->session->userdata('feun_usertype')==1)
		{
			$this->spakAdmin();
		}
	}
	
	function spak()
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
			 
			 //Data Orang Tua
			 $data['nm_ortu']			= $result[0]['nama_ortu'];
			 $data['alamat_ortu']	= $result[0]['alamat'];
			 $data['pekerjaan']		= $result[0]['pekerjaan'];
			 $data['pangkat']			= $result[0]['pangkat'];
			 $data['jabatan']			= $result[0]['jabatan'];
			 $data['nip']				= $result[0]['nip'];
			 $data['instansi']		= $result[0]['instansi'];

			 //Data Akun
			 $data['username']=$result[0]['username'];
			 
			 //Pesan sukses atau gagal
			 $data['error']			= $this->session->flashdata('gagal');
			 $data['pesan']			= $this->session->flashdata('sukses');

			 
			 $this->template->load('main_views','view_spak',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	//Admin atau Operator
	function spakAdmin()
	{
		$data['css_menu']	= '<script>
									document.getElementById("dashboard").className = "";
									document.getElementById("forms_menu").className = "mega-menu active";
									</script>';
		$hasil				= $this->model_spak->listSpak();
		$data['hasil']		= $hasil;
		
		//$data['coba']		= 'Isinya';
		$this->template->load('main_views','view_spak_admin',$data);
	}
	
	function inputSpak()
	{
		$created		= date('Y-m-d H:i:s');
		$pengguna	= $this->session->userdata('feun_username');
		$cekphoto	= $_FILES['userfile']['name'];
		if(!$cekphoto) 
		{
			$this->session->set_flashdata('gagal', 'Pilih file yang akan diunggah, silakan ulangi kembali');
			header('location: '.base_url().'index.php/spak');
		}else
		{
			$main_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/"); //Buka Directory Utama untuk Upload data
			$pengguna_dir	= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna); //Buka directory pengguna
			$modul_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/spak");
				
			if(false == readdir($pengguna_dir)) //Jika Tidak ditemukan Directory Pengguna, Maka
			{
				mkdir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/spak",0777,true); //Buat Directory Baru (Recursive), yakni dirctory pengguna dan directory modul
			}else if(false == readdir($modul_dir))												//Jika ditemukan directory pengguna, maka
			{
				mkdir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/spak",0777);						//Hanya buat directory modul saja.
			}else 
			{
				closedir($modul_dir);
			}
    		
			$namafile						= $cekpoto;
			$config['upload_path']		= dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/spak";
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= '5000';
			$config['max_width']  		= '1280';
			$config['max_height']  		= '1024';
			$config['overwrite']			= TRUE;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload())
			{
				$this->session->set_flashdata('gagal', 'Data gagal diunggah, silakan ulangi kembali');
				header('location: '.base_url().'index.php/spak');
			}
			else
			{
				$npm						= $pengguna;
				$dpp						= str_replace(' ', '_', $_FILES['userfile']['name']);//Mengganti karakter spasi dengan underscores
				$status					= '0';
				$tgl_pengajuan			= $created;
				
				$this->model_spak->saveSpak($npm,$dpp,$status,$tgl_pengajuan);
				$this->session->set_flashdata('sukses', 'Berkas '.$_FILES['userfile']['name'].' berhasil diunggah');
				header('location: '.base_url().'index.php/spak');
			}
		}		
	}
	
	function lihatDetailSpak()
	{
		$data['css_menu']	= '<script>
									document.getElementById("dashboard").className = "";
									document.getElementById("forms_menu").className = "mega-menu active";
									</script>';
		$id				= $this->security->xss_clean($_GET['zXdu87']);
		
		$hasil			= $this->model_spak->detailSpak($id);
		$data['hasil_cetak'] = $hasil;
		
		$this->template->load('main_views','view_detail_spak',$data);
	 	
	 	
	}
	
	function prosesSpak()
	{
		
		
		//Ambil data post dari field Data Proses
		$noSurat					= $this->security->xss_clean($this->input->post('no_surat'));
		$ttd						= $this->security->xss_clean($this->input->post('ttd'));
				
		$id						= $this->security->xss_clean($_GET['zXdu88']);
		$status					= '1';
		$tgl_pemrosesan		= date('Y-m-d H:i:s');
		
		$prosesSpak				= $this->model_spak->prosesSpak($id,$noSurat,$ttd,$status,$tgl_pemrosesan);
		if($prosesSpak)
		{
			$this->session->set_flashdata('sukses', 'Form SPAK berhasil diproses');
			header('location: '.base_url().'index.php/spak');
		}else
		{
			$this->session->set_flashdata('gagal', 'Form SPAK belum berhasil diproses, silakan ulangi kembali');
			header('location: '.base_url().'index.php/spak');
		}	
	}
	
	function cetakSpak()
	{
		$this->load->helper('dompdf');
		
		$id						= $this->security->xss_clean($_GET['zXdu87']);
		$status					= '2';
		$tgl_pengesahan		= date('Y-m-d H:i:s');
		
		$this->model_spak->updateSpak($id,$status,$tgl_pengesahan);
		$hasil			= $this->model_spak->cetakSpak($id);
		$data['hasil_cetak'] = $hasil;
		
	 	// page info here, db calls, etc.     
     $html = $this->load->view('view_cetak_spak', $data, true);
     pdf_create($html, 'filename');
	}
}

/* End of file spak.php */
/* Location: ./modules/spak/controllers/spak.php */