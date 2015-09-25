<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends MX_Controller 
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
		$this->load->model('main_models');
		$this->load->model('model_account');
		$this->load->helper("url");
	}
	
	/** function index
	------------------------------------------------------------------------ **/
	function index()
	{
		$this->account();
	}
	
	function account()
	{
		
		//$id_user=$this->security->xss_clean($this->session->userdata('feun_id'));
		$npm=$this->security->xss_clean($this->session->userdata('feun_key'));
		$result = $this->main_models->ambilMhsOrtu($npm);
									  
		if ( $result == TRUE) //apabila dilempar dari model true
		{ 	
			 //Ambil data array kemudian passing string ke view
			 //Data Pribadi
			 $data['nm_mhs']			= $result[0]['nama'];
			 $data['npm']				= $result[0]['npm'];
			 $data['prodi']			= $result[0]['prodi'];
			 $data['alamat']			= $result[0]['alamat'];
			 $data['kota']				= $result[0]['kota'];
			 $data['kode_pos']		= $result[0]['kodepos'];
			 $data['tempat_lahir']	= $result[0]['tempat_lahir'];
			 $data['tgl_lahir']		= $result[0]['tgl_lahir'];
			 $data['email']			= $result[0]['email'];
			 $data['jenkel']			= $result[0]['jenkel'];
			 $data['agama']			= $result[0]['agama'];
			 $data['gol_darah']		= $result[0]['gol_darah'];
			 $data['no_telp']			= $result[0]['no_telp'];
			 
			 //Data Orang Tua
			 $data['nm_ortu']			= $result[0]['nama_ortu'];
			 $data['email_ortu']		= $result[0]['email_ortu'];
			 $data['pend_terakhir']	= $result[0]['pend_terakhir'];
			 $data['alamat_ortu']	= $result[0]['alamat_ortu'];
			 $data['kota_ortu']		= $result[0]['kota_ortu'];
			 $data['kode_pos_ortu']	= $result[0]['kodepos_ortu'];
			 $data['pekerjaan']		= $result[0]['pekerjaan'];
			 $data['pangkat']			= $result[0]['pangkat'];
			 $data['jabatan']			= $result[0]['jabatan'];
			 $data['nip']				= $result[0]['nip'];
			 $data['instansi']		= $result[0]['instansi'];
			 $data['agama_ortu']		= $result[0]['agama_ortu'];
			 $data['no_telp_ortu']	= $result[0]['no_telp_ortu'];
			 
			 //Data Akun
			 $data['username']=$result[0]['username'];
			 
			 //Pesan sukses atau gagal
			 $data['error']			= $this->session->flashdata('gagal');
			 $data['pesan']			= $this->session->flashdata('sukses');

			 
			 $this->template->load('main_views','view_account',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	function editAccount()
	{
		$npm=$this->security->xss_clean($this->session->userdata('feun_username'));
		$result = $this->main_models->ambilAkun($npm);
									  
		if ( $result == TRUE) //apabila dilempar dari model true
		{ 	
			 //Ambil data array kemudian passing string ke view
			 //Data Pribadi
			 //$data['']					= ;
			 
			 //Data Akun
			 $data['username']		= $result[0]['username'];
			 
			 //Pesan sukses atau gagal
			 $data['error']			= $this->session->flashdata('gagal');
			 $data['pesan']			= $this->session->flashdata('sukses');

			 
			 $this->template->load('main_views','view_edit_account',$data);
		} else 
		{
			header('location:'.base_url());
		}
	}
	
	function ubahDataPribadi()
	{
		//Key
		$npm				= $this->session->userdata('feun_username');
		
		//Ambil data post dari field Data Pribadi
		$nama					= $this->security->xss_clean($this->input->post('nm_mhs'));
		$prodi				= $this->security->xss_clean($this->input->post('prodi'));
		$alamat				= $this->security->xss_clean($this->input->post('alamat'));
		$kota					= $this->security->xss_clean($this->input->post('kota'));
		$kodepos				= $this->security->xss_clean($this->input->post('kode_pos'));
		$tempatLahir		= $this->security->xss_clean($this->input->post('tempat_lahir'));
		$tgllLahir			= $this->security->xss_clean($this->input->post('tgl_lahir'));
		$email				= $this->security->xss_clean($this->input->post('email'));
		$jenkel				= $this->security->xss_clean($this->input->post('jenkel'));
		$agama				= $this->security->xss_clean($this->input->post('agama'));
		$golDarah			= $this->security->xss_clean($this->input->post('gol_darah'));
		$noTelpon			= $this->security->xss_clean($this->input->post('no_telp'));
		
		//Ambil data post dari field Data Ortu
		$nama_ortu			= $this->security->xss_clean($this->input->post('nm_ortu'));
		$email_ortu			= $this->security->xss_clean($this->input->post('email_ortu'));
		$pendTerakhir		= $this->security->xss_clean($this->input->post('pend_terakhir'));
		$alamat_ortu		= $this->security->xss_clean($this->input->post('alamat_ortu'));
		$kota_ortu			= $this->security->xss_clean($this->input->post('kota_ortu'));
		$kodepos_ortu		= $this->security->xss_clean($this->input->post('kode_pos_ortu'));
		
		$pekerjaan			= $this->security->xss_clean($this->input->post('pekerjaan'));
		$pangkat				= $this->security->xss_clean($this->input->post('pangkat'));
		$jabatan				= $this->security->xss_clean($this->input->post('jabatan'));
		$nip					= $this->security->xss_clean($this->input->post('nip'));
		$instansi			= $this->security->xss_clean($this->input->post('instansi'));
		$agama_ortu			= $this->security->xss_clean($this->input->post('agama_ortu'));
		$noTelpon_ortu		= $this->security->xss_clean($this->input->post('no_telp'));
		
		//Ambil data post dari field Data Akun
		$passLama			= $this->security->xss_clean($this->input->post('pass_lama'));
		$passBaru			= $this->security->xss_clean($this->input->post('pass_baru'));
		$passBaruConfirm	= $this->security->xss_clean($this->input->post('pass_baru_konfir'));
		
		$ubahDataPribadi	= $this->model_account->editDataPribadi($nama,$prodi,$alamat,$kota,$kodepos,$tempatLahir,$tglLahir,$email,$jenkel,$agama,$golDarah,$noTelpon,$npm);
		$ubahDataOrtu		= $this->model_account->editDataOrtu($nama_ortu,$email_ortu,$pendTerakhir,$alamat_ortu,$kota_ortu,$kodepos_ortu,$pekerjaan,$pangkat,$jabatan,$nip,$instansi,$agama_ortu,$noTelpon_ortu,$npm);
		//$ubahDataAkun		= $this->model_account->editDataAkun($passLama,$passBaru,$passConfirm);
		
		if($passLama == "")
		{
			if($ubahDataPribadi && $ubahDataOrtu)
			{
				$this->session->set_flashdata('sukses', 'Data anda telah berhasil diubah');
				header('location: '.base_url().'index.php/account');
			}else
			{
				$this->session->set_flashdata('gagal', 'Data anda gagal diubah, silakan ulangi kembali');
				header('location: '.base_url().'index.php/account');
			}
		}else
		{
			//require_once ('system/libraries/helper.php');
			//$password =$this->security->xss_clean($this->input->post('pass',TRUE));
			//$salt = JUserHelper::genRandomPassword(32);
			//$crypt = JUserHelper::getCryptedPassword($password, $salt);
			//$pass_baru = $crypt.':'.$salt;
			
			if($ubahDataPribadi && $ubahDataOrtu && $ubahDataAkun)
			{
				$this->session->set_flashdata('sukses', 'Data anda telah berhasil diubah');
				header('location: '.base_url().'index.php/account');
			}else
			{
				$this->session->set_flashdata('gagal', 'Data anda gagal diubah, silakan ulangi kembali');
				header('location: '.base_url().'index.php/account');
			}
		}	
	}
	
	function ubahDataOrtu()
	{
		//Ambil data post dari field Data Ortu
		$nama				= $this->security->xss_clean($this->input->post('nm_ortu'));
		$email			= $this->security->xss_clean($this->input->post('email'));
		$pendTerakhir	= $this->security->xss_clean($this->input->post('pend_terakhir'));
		$alamat			= $this->security->xss_clean($this->input->post('alamat_ortu'));
		$kota				= $this->security->xss_clean($this->input->post('kota_ortu'));
		$kodepos			= $this->security->xss_clean($this->input->post('kode_pos_ortu'));
		
		$pekerjaan		= $this->security->xss_clean($this->input->post('pekerjaan'));
		$pangkat			= $this->security->xss_clean($this->input->post('pangkat'));
		$jabatan			= $this->security->xss_clean($this->input->post('jabatan'));
		$nip				= $this->security->xss_clean($this->input->post('nip'));
		$instansi		= $this->security->xss_clean($this->input->post('instansi'));
		$agama			= $this->security->xss_clean($this->input->post('agama'));
		$noTelpon		= $this->security->xss_clean($this->input->post('no_telp'));
		
		$npm				= $this->session->userdata('feun_username');
		
		$ubahData		= $this->model_account->editDataOrtu($nama,$email,$pendTerakhir,$alamat,$kota,$kodepos,$pekerjaan,$pangkat,$jabatan,$nip,$instansi,$agama,$noTelpon,$npm);
		
		if($ubahData)
		{
			$this->session->set_flashdata('sukses', 'Data Orangtua anda telah berhasil diubah');
			header('location: '.base_url().'index.php/account');
		}else
		{
			$this->session->set_flashdata('gagal', 'Data Orangtua anda gagal diubah, silakan ulangi kembali');
			header('location: '.base_url().'index.php/account');
		}	
	}
	
	function ubahDataAkun()
	{
		$id					= $this->session->userdata('feun_id');
		$passLama			= $this->security->xss_clean($this->input->post('pass_lama',TRUE));
		$passBaru			= $this->security->xss_clean($this->input->post('pass_baru',TRUE));
		$passBaruKonfir	= $this->security->xss_clean($this->input->post('pass_baru_konfir',TRUE));
		
		
		//$crypt0				= JUserHelper::getCryptedPassword($passLama, $salt);
		//$passwordLama		= $crypt0.':'.$salt;
		
		//$crypt1 = '';
		//$getPasword = '';
		//require_once ('system/libraries/joomla-helper.php');
      //	$cryptsalt = $this->main_models->checkPassword($id);//password yg ada di database
		//list($crypt,$salt0) = explode(":",$cryptsalt);
		//$crypt1 = joomlauser::getCryptedPassword($passLama,$salt0);
		//$getPasword = $crypt1.':'.$salt0;
		
		//$checkPassword		= ;
		
		if($passLama)
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('pass_lama', 'Password Lama', 'required'); 
			$this->form_validation->set_rules('pass_baru', 'Password Baru', 'matches[pass_baru_konfir]'); 
			$this->form_validation->set_rules('pass_baru_konfir', 'Ulangi Password Baru', 'matches[pass_baru]'); 
			//$this->form_validation->set_rules('usertype', 'User Type', 'required'); 
			if($this->form_validation->run() == TRUE)
			{
				

				//if($passBaru <>""){
						require_once ('system/libraries/helper.php');
						$salt					= JUserHelper::genRandomPassword(32);
						$password		= $passBaru;
						$crypt			= JUserHelper::getCryptedPassword($password, $salt);
						$passwordBaru	= $crypt.':'.$salt;
					//} else{
						//$passwordBaru	= "";
				//}
				
				$save	= $this->model_account->editDataAkun($id, $passwordBaru);
				if(!$save)
				{
					$this->session->set_flashdata('gagal', 'Data Akun anda gagal diubah, silakan ulangi kembali');
					header('location: '.base_url().'index.php/account/editAccount');
				} else 
				{
					header('location: '.base_url().'index.php/login/logout');
				}

			} else 
			{
				$this->session->set_flashdata('gagal', 'Password anda tidak sesuai, silakan ulangi kembali');
				header('location: '.base_url().'index.php/account/editAccount');
			}
		} else 
		{
			$this->session->set_flashdata('gagal', 'Password lama anda tidak tepat, silakan ulangi kembali = '.$passLama);
			header('location: '.base_url().'index.php/account/editAccount');
		}
	}
		
	function ubahPhotoAkun()
	{
		//$created		= date('Y-m-d H:i:s');
		$pengguna	= $this->session->userdata('feun_username');
		$cekphoto	= $_FILES['userfile']['name'];
		if(!$cekphoto) 
		{
			$this->session->set_flashdata('gagal', 'Pilih file yang akan diunggah, silakan ulangi kembali');
			header('location: '.base_url().'index.php/dashboard');
		}else
		{
			$main_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/"); //Buka Directory Utama untuk Upload data
			$pengguna_dir	= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna); //Buka directory pengguna
			//$modul_dir		= opendir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna."/skk");
				
			if(false == readdir($pengguna_dir)) //Jika Tidak ditemukan Directory Pengguna, Maka
			{
				mkdir(dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna,0777); //Buat Directory Baru (Recursive), yakni dirctory pengguna dan directory modul
			}else 
			{
				closedir($pengguna_dir);
			}
    		
			$namafile						= $cekpoto;
			$config['upload_path']		= dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$pengguna;
			$config['file_name']			= $pengguna.'.jpg';
			$config['allowed_types']	= 'jpg';
			$config['max_size']			= '0';
			$config['max_width']  		= '0';
			$config['max_height']  		= '0';
			$config['overwrite']			= TRUE;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload())
			{
				$this->session->set_flashdata('gagal', 'Data gagal diunggah, silakan ulangi kembali');
				header('location: '.base_url().'index.php/dashboard');
			}
			else
			{
				$npm							= $pengguna;
				$photo						= $pengguna.'.jpg';//Mengganti karakter spasi dengan underscores
				//$status					= '0';
				//$tgl_pengajuan			= $created;
				
				$this->model_account->ubahPhotoAkun($npm,$photo);
				$this->session->set_flashdata('sukses', 'Photo baru berhasil diunggah');
				header('location: '.base_url().'index.php/dashboard');
			}
		}
	}
}
/* End of file account.php */
/* Location: ./modules/account/controllers/account.php */